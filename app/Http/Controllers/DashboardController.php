<?php

namespace App\Http\Controllers;

use App\Mail\EmailOrder;
use App\Order;
use App\OrderDetail;
use App\OrderItem;
use App\OrderList;
use App\Terms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use DataTables;
class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function dashboard(){
        $orders = Order::count();
        return view('admin.dashboard',compact('orders'));
    }

    public function allorders(Request $request){
        
        $orders = Order::all();
        return view('admin.orders',compact('orders'));
    }

    public function fetchallorders(Request $request){

        if ($request->filterdata) {
            
            $fromdate = $request->filterdata[0]['value'];
            $todate = $request->filterdata[1]['value'];
            
            $data = Order::where('full_name','!=',111);
                    if (!empty($fromdate)) {
                        
                        $fromdate = date('y-m-d',strtotime($fromdate));
                        $data->whereDate('created_at', '>=', $fromdate);
                    }
                    if (!empty($todate)) {
                        $todate = date('y-m-d',strtotime($todate));
                        $data->whereDate('created_at', '<=', $todate);
                    }     
                /*->whereHas('assigns', function ($query) use($assigned_to) {
                    $query->where('assignedto', '=', $assigned_to);
                })*/
                $data->get();
        } else {
            $data = Order::orderBy('id','desc')->get();
        }
        return DataTables::of($data)
        ->addColumn('created_at',function($data){
            return $data->created_at->format('d-M-Y');
        })
        ->addColumn('subtotal',function($data){
            return $data->orderdetails->subtotal;
        })
        ->addColumn('lavytax',function($data){
            return $data->orderdetails->lavytax;
        })
        ->addColumn('govtax',function($data){
            return $data->orderdetails->govtax;
        })
        ->addColumn('netamount',function($data){
            return $data->orderdetails->netamount;
        })
        ->addColumn('options',function($data){
            return '&emsp;<a class="btn btn-primary" href="'.route('fetchorderdetails',$data->id).'">View</a>';
        })
        ->rawColumns(['created_at','options','govtax','lavytax','subtotal','netamount'])
        ->make(true);
    }

    public function index(){
        
    	return view('tasks.index');
    }  

    public function store(Request $request){
                
        $this->validate($request, [
            'full_name'         => ['required', 'string', 'max:255'],
            'company'           => ['required', 'string', 'max:255'],
            'email'             => ['required', 'string', 'email', 'max:255'],
            'mobile_no'         => ['required', 'phone', 'min:11','max:13'],
            'office_no'         => ['required'],
            'fax_no'            => ['required'],
            'collect_from'      => ['required'],
            'colldate'          => ['required'],
            'pay'               => ['required'],
            'whole_roast'       => ['required'],
            'whole_roast_price' => ['required'],
        ]);
        $order_itmes = $request->except(['full_name','company','mobile_no','office_no','fax_no','email','collect_from','colldate','pay','_token','subtotal_hidden', 'subtotalevyTax_hidden', 'subtotaGovtTax_hidden', 'netotal']);
        $ord = array_chunk($order_itmes,3,true);
        foreach($ord as $or){
            $keys = array_keys($or);
            if($or[$keys[2]]){

                $orderItems[] = [
                    'name'  => $or[$keys[0]],
                    'price' => $or[$keys[1]],
                    'qty'   => $or[$keys[2]],
                ];
            }
        }
        Session::push('orderlist', $orderItems);
        Session::save();
        Session::push('orderdetails',$request->all());
        Session::save();
        return redirect()->route('revieworder');
        
    }


    public function orders(){
        $orders = Order::all();
        return view('tasks.orders',compact('orders'));
    }

    public function revieworder(){
        return view('tasks.review_order');
    }
    public function confirmorder(Request $request){

        $orderdetail = Session::get('orderdetails');
        $orderdetail = $orderdetail[0];

        DB::beginTransaction();
        // Create Order 
        $bill_no = 'XZ-'.strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 4));
        $order = new Order;
        $order->order_no       = $bill_no;
        $order->full_name      = $orderdetail['full_name'];
        $order->company        = $orderdetail['company'];
        $order->mobile_no      = $orderdetail['mobile_no'];
        $order->office_no      = $orderdetail['office_no'];
        $order->fax_no         = $orderdetail['fax_no'];
        $order->email          = $orderdetail['email'];
        $order->collect_from   = $orderdetail['collect_from'];
        $order->colldate       = date('Y-m-d',strtotime($orderdetail['colldate']));
        $order->pay            = $orderdetail['pay'];
        $order->status         = 'Review';
        $order->save();
       
        $order_list = Session::get('orderlist');
        $orderItems = $order_list[0];
        foreach($orderItems as $items){
            $or_items = new OrderList;
            $or_items->order_id    = $order->id;
            $or_items->item_name   = $items['name'];
            $or_items->item_price  = $items['price'];
            $or_items->qty         = $items['qty'];
            $or_items->save();
        }
        if($or_items){
            // Add Order Details
            $order_details = new OrderDetail;
            $order_details->order_id  = $order->id;
            $order_details->subtotal  = $orderdetail['subtotal_hidden'];
            $order_details->lavytax   = $orderdetail['subtotalevyTax_hidden'] ?? 0;
            $order_details->govtax    = $orderdetail['subtotaGovtTax_hidden'] ?? 0;
            $order_details->netamount = $orderdetail['netotal'];
            $order_details->save();
            if($order_details){
                DB::commit();
                
                $data = ['order_items'=>$orderItems,'order'=>$order_details];
                Mail::to($orderdetail['email'])
                ->send(new EmailOrder($data));

                Session::forget('orderlist');
                Session::save();
                Session::forget('orderdetails');
                Session::save();

                return redirect()->route('thankyoupage');
            }
        }else{
            DB::rollBack();
            return redirect()->back()->with(['message'=>'Somethings not working']);
        }  
    }

    public function thankyoupage(){
        return view('tasks.thankyoupage');
    }

    public function fetchdetail($id){
        $order = Order::find($id);
        $orderitems = OrderList::where('order_id',$id)->get();
        $order_detail = OrderDetail::where('order_id',$id)->first();
        return view('admin.invoice',compact('order','orderitems','order_detail'));
    }

    public function terms(){
        $terms = Terms::find(1);
        return view('admin.terms',compact('terms'));
    }
    public function termstore(Request $request){
        $terms = Terms::find(1);
        if($terms){
            $terms->terms = $request->terms;
        }else{
         $terms = new Terms;
         $terms->terms = $request->terms;
        }
        $terms->save();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\EmailOrder;
use App\Order;
use App\OrderDetail;
use App\OrderItem;
use App\OrderList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

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

    public function allorders(){
        $orders = Order::all();
        return view('admin.orders',compact('orders'));
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
        $order = new Order;
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
}

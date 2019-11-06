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
        // $order_itmes = $request->except(['full_name','company','mobile_no','office_no','fax_no','email','collect_from','colldate','pay','_token','subtotal_hidden', 'subtotalevyTax_hidden', 'subtotaGovtTax_hidden', 'netotal']);
        // $ord = array_chunk($order_itmes,3,true);
        // foreach($ord as $or){
        //     $keys = array_keys($or);
        //     if($or[$keys[2]]){

        //         $orderItems[] = [
        //             'name'  => $or[$keys[0]],
        //             'price' => $or[$keys[1]],
        //             'qty'   => $or[$keys[2]],
        //         ];
        //     }
            
        // }
        
        // dd($orderItems);
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
        DB::beginTransaction();
        // Create Order 
        $order = new Order;
        $order->full_name      = $request->full_name;
        $order->company        = $request->company;
        $order->mobile_no      = $request->mobile_no;
        $order->office_no      = $request->office_no;
        $order->fax_no         = $request->fax_no;
        $order->email          = $request->email;
        $order->collect_from   = $request->collect_from;
        $order->colldate       = date('Y-m-d',strtotime($request->colldate));
        $order->pay            = $request->pay;
        $order->status         = 'Review';
        $order->save();
        // Order items code 
        // $order_itmes = $request->except(['full_name','company','mobile_no','office_no','fax_no','email','collect_from','colldate','pay','_token','subtotal_hidden', 'subtotalevyTax_hidden', 'subtotaGovtTax_hidden', 'netotal']);
        // $order_itmes['order_id'] = $order->id;
        // $order_status = OrderItem::create($order_itmes);
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
            $order_details->order_id = $order->id;
            $order_details->subtotal = $request->subtotal_hidden;
            $order_details->lavytax = $request->subtotalevyTax_hidden ?? 0;
            $order_details->govtax = $request->subtotaGovtTax_hidden ?? 0;
            $order_details->netamount = $request->netotal;
            $order_details->save();
            if($order_details){
                DB::commit();
                // $order = OrderDetail::where('order_id',$order->id)->first();

                // $items = OrderItem::where('order_id',$order->id)->first()->toArray();
                // $items1 = $items;
                // unset($items['order_id'],$items['id'],$items['whole_roast'],$items['created_at'],$items['updated_at']);
                // $order_items = array_chunk($items,2,true);
                // $data = ['order_items'=>$order_items,'order'=>$order];
                // Mail::to($request->email)
                // ->send(new EmailOrder($data));
                // $this->revieworder($order->id);
                return redirect()->route('revieworder',$order->id);
            }
        }else{
            DB::rollBack();
            return redirect()->back()->with(['message'=>'Somethings not working']);
        }  
    }


    public function orders(){
        $orders = Order::all();
        return view('tasks.orders',compact('orders'));
    }

    public function revieworder($order_id){
        $order = Order::find($order_id);
        $orderlist = OrderList::where('order_id',$order_id)->get();
        $orderdetail = OrderDetail::where('order_id',$order_id)->first();
        return view('tasks.review_order',compact('order','orderlist','orderdetail'));
    }
    public function confirmorder(){
        
    }
}

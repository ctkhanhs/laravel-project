<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; 
use App\Models\Order; 
use App\Models\OrderDetail; 
use Helper;
class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::paginate(2);
        return view('admin.customer.index',compact('customer'));
    }

    public function order($id){
        $orders = Order::where(['customer_id'=> $id])->paginate(2);
        return view('admin.customer.order',compact('orders'));
    }
    public function order_details($id){
        $order_details = OrderDetail::where(['order_id'=> $id])->paginate(2);
        return view('admin.customer.order_detail',compact('order_details'));
    }
    public function no_account() {
        $orders = Order::where(['customer_id'=> NULL])->paginate(2);
        return view('admin.customer.no_account',compact('orders'));
    }
}

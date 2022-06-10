<?php
namespace App\Helper;
use App\Models\Order; 
use App\Models\OrderDetail; 
use App\Models\Product;  

class Helper {
    
    // public function order($id){
    //     $orders = Order::where(['customer_id'=> $id])->paginate(2);
    //     return view('admin.customer.order',compact('orders'));
    // }
    // public function order_details($id){
    //     $order_details = OrderDetail::where(['order_id'=> $id])->paginate(2);
    //     return view('admin.customer.order_detail',compact('order_details'));
    // }
}

?>
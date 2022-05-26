<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer; 

class CustomerController extends Controller
{
    public function index(){
        $customer = Customer::paginate(2);
        return view('admin.customer.index',compact('customer'));
    }
}

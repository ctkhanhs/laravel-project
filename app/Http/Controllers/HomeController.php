<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Account;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function category(){
        $cats = Category::all();// select * from categories
        return view('category',compact('cats'));
    }

    public function product(){
        $pros = Product::all();// select * from product
        return view('product',compact('pros'));
    }
    public function account(){
        $accounts = Account::all();// select * from account
        return view('account',compact('accounts'));
    }

}

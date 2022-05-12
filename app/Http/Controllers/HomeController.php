<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $productSale = Product::orderBy('id', 'DESC')->limit(8)->get();
        return view('home', compact('productSale'));
    }

    public function category(Category $category){
        $products=$category->products()->paginate(2);
        return view('category', compact('products'));

    }
    public function product(Product $product){
        return view('product', compact('product'));

    }

    public function register(){
            return view('customer.register');
    }

    public function post_register(Request $req){

    }
}

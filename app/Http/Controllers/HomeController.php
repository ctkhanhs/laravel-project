<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Favorite;

class HomeController extends Controller
{
    public function home()
    {
        $productSale = Product::orderBy('id', 'DESC')->limit(8)->get();
        return view('home', compact('productSale'));
    }

    public function category(Category $category)
    {
        $products = $category->products()->paginate(4);
        return view('category', compact('products','category'));
    }
    public function product(Product $product)
    {
        return view('product', compact('product'));
    }

    public function register()
    {
        return view('customer.register');
    }

    public function post_register(Request $req)
    {
        $req->validate([
            'password' => 'required',
            'comfirm_password' => 'required|same:password'
        ], [
            'password.required' => 'Mật khẩu không để trống',
            'comfirm_password.required' => 'Nhập lại mật khẩu ở trên',
            'comfirm_password.same' => 'Nhập lại mật khẩu không chính xác'
        ]);
        $data = $req->only('name', 'email', 'phone', 'address');
        $data['password'] = bcrypt($req->password);
        if (Customer::create($data)) {
            return redirect()->route('home.login');
        } else {
            return redirect()->back();
        }
    }

    public function login(){
        return view('customer.login');
    }

    public function post_login(Request $req){
        $data = $req->only('email','password');
        $check = auth()->guard('customer')->attempt($data);
        if($check){
            return redirect()->route('home');
        }
        return redirect()->back()->with('no','đăng nhập không thành công');


    }

    public function logout() {
        auth()->guard('customer')->logout();
        return redirect()->route('home.login');
    }

    public function favorite($id){
        Favorite::create([
            'product_id' => $id,
            'customer_id' => auth()->guard('customer')->user()->id
        ]);
        return redirect()->route('home.product_favorite');

    }

    public function favorites_list() {
        $products = auth()->guard('customer')->user()->favorites;
        return view('favorites_list',compact('products'));
    }

    public function unfavorite($id){
        Favorite::where([
            'product_id' => $id,
            'customer_id' => auth()->guard('customer')->user()->id
        ])->delete();
        return redirect()->route('home.product_favorite');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use stdClass;

class CartController extends Controller
{

    public $total_quantity = 0;
    public $total_price = 0;

    public function add($id, $quantity = 1)
    {
        $carts =  session('cart') ? session('cart') : [];
        if (isset($carts[$id])) {
            $carts[$id]->quantity += $quantity;
        } else {
            $pro = Product::find($id);
            $item = new \stdClass();
            $item->id = $pro->id;
            $item->name = $pro->name;
            $item->image = $pro->image;
            $item->price = $pro->sale_price > 0 ? $pro->sale_price : $pro->price;
            $item->quantity = $quantity;
            $carts[$id] = $item;
        }
        session(['cart' => $carts]);
        return redirect()->route('cart.view');
    }

    public function update($id)
    {
        $quantity = request('quantity', 1);
        $carts =  session('cart') ? session('cart') : [];
        if (isset($carts[$id])) {
            $carts[$id]->quantity = $quantity;
        }
        return redirect()->route('cart.view');
    }

    public function delete($id)
    {
        $carts =  session('cart') ? session('cart') : [];
        if (isset($carts[$id])) {
            unset($carts[$id]);
        }
        session(['cart' => $carts]);
        return redirect()->route('cart.view');
    }

    public function clear()
    {
        session(['cart' => null]);
        return redirect()->route('cart.view');
    }

    private function get_total_price()
    {
        $t = 0;
        $carts =  session('cart') ? session('cart') : [];
        foreach ($carts as $item) {
            $t += $item->quantity * $item->price;
        }
        return $t;
    }
    private function get_total_quantity()
    {
        $t = 0;
        $carts =  session('cart') ? session('cart') : [];
        foreach ($carts as $item) {
            $t += $item->quantity;
        }
        return $t;
    }

    public function view()
    {
        $carts =  session('cart') ? session('cart') : [];
        $total_quantity = $this->get_total_quantity();
        $total_price = $this->get_total_price();
        return view('cart', compact('carts', 'total_quantity', 'total_price'));
    }

    public function form()
    {
        $carts =  session('cart') ? session('cart') : [];
        $total_quantity = $this->get_total_quantity();
        $total_price = $this->get_total_price();
        return view('checkout', compact('carts', 'total_quantity', 'total_price'));
    }

    public function submit_form(Request $req)
    {
        $carts =  session('cart') ? session('cart') : [];
        if (Auth::guard('customer')->check()) {
            $c_id = Auth::guard('customer')->user()->id;
            if ($order = Order::create([
                'customer_id' => $c_id,
                'name' => Auth::guard('customer')->user()->name,
                'email' => Auth::guard('customer')->user()->email,
                'phone' => Auth::guard('customer')->user()->phone,
                'address' => Auth::guard('customer')->user()->address
            ])) {
                $order_id = $order->id;
                foreach ($carts as $item) {
                    OrderDetail::create([
                        'order_id' => $order_id,
                        'product_id' => $item->id,
                        'price' => $item->price,
                        'quantity' => $item->quantity
                    ]);
                }
                session(['cart' => '']);
                return redirect()->route('cart.checkout_success')->with('success', 'dat hang thanh cong');
            }
        } else {
            if ($order = Order::create($req->only('name','email','address','phone'))) {
                $order_id = $order->id;
                foreach ($carts as $item) {
                    OrderDetail::create([
                        'order_id' => $order_id,
                        'product_id' => $item->id,
                        'price' => $item->price,
                        'quantity' => $item->quantity
                    ]);
                }
                session(['cart' => '']);
                return redirect()->route('cart.checkout_success')->with('success', 'dat hang thanh cong');
            }
        }
    }

    public function checkout_success()
    {
        return view('checkout_success');
    }
}

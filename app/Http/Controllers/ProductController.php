<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function index(Request $req)
    {
        $products = Product::paginate(2);
        if ($req->key) {
            $key = $req->key;
            $products = Product::where('name', 'like', '%' . $key . '%')->paginate(2);
        }
        return view('admin.product.index', compact('products'));
    }

    public function show(Product $product){
        return view('admin.product.show', compact('product'));


    }

    public function create()
    {
        $cats = Category::orderBy('name', 'asc')->get();
        return view('admin.product.create', compact('cats'));
    }

    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required|unique:product',
            'category_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'upload' => [
                'required',
                'mimes:jpeg,jpg,png,gif,bmp'
            ]

        ], [
            'name.required' => 'Tên sản phẩm không để trống',
            'name.unique' => 'Tên sản phẩm đã được sử dụng',

            'upload.required' => 'File không để trống',
            'upload.mimes' => 'Định dạng File không hợp lệ',

            'category_id.required' => 'Danh mục không để trống',
            'price.required' => 'Giá sản phẩm không để trống'

        ]);
        $ext = $req->upload->extension();
        $file_name = time() . '.' . $ext;
        $req->upload->move(public_path('uploads'), $file_name);
        $data = $req->only('name', 'price', 'sale_price', 'category_id','description');
        $data['image'] = $file_name;
        Product::create($data);
        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        $cats = Category::orderBy('name', 'asc')->get();
        return view('admin.product.edit', compact('product','cats'));
    }



    public function update(Request $req, Product $product)
    {
        $req->validate([
            'name' => 'required|unique:product,name,' . $product->id,
            'category_id' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'upload' => [
                'required',
                'mimes:jpeg,jpg,png,gif,bmp'
            ]

        ], [
            'name.required' => 'Tên sản phẩm không để trống',
            'name.unique' => 'Tên sản phẩm đã được sử dụng',

            'upload.required' => 'File không để trống',
            'upload.mimes' => 'Định dạng File không hợp lệ',

            'category_id.required' => 'Danh mục không để trống',
            'price.required' => 'Giá sản phẩm không để trống'

        ]);
      
        return redirect()->route('product.index');
    }
}

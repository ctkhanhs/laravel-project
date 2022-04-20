<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function list(Request $req){
        $cats=Category::paginate(2);
        if($req->key) {
            $key=$req->key;
            $cats=Category::where('name','like','%'.$key.'%')->paginate(2);


        }
        return view('admin.category.index',compact('cats'));
    }
    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $req){
        $req->validate([
            'name' =>'required'

        ],[
            'name.required'=>'Tên danh mục không để trống'

        ]);
        Category::create($req->only('name','status'));
        return redirect()->route('category.index');
    }

    public function delete(Category $category){
        $category->delete();
        return redirect()->route('category.index');
    }
}

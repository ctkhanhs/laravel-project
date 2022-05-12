<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Category\CategoryStoreRequest as ReqStore;
use App\Http\Requests\Category\CategoryUpdateRequest as ReqUpdate;

class CategoryController extends Controller
{

    public function index(Request $req)
    {
        $cats = Category::search()->paginate(2);
        return view('admin.category.index', compact('cats'));
    }
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(ReqStore $req, Category $category)
    {

        $category->add();
        return redirect()->route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(ReqUpdate $req, Category $category)
    {
        $category->updateCategory();
        return redirect()->route('category.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', [HomeController::class, 'home'])->name('home');
Route::get('/{category}-{slug}', [HomeController::class, 'category'])->name('home.category');
Route::get('san-pham/{product}-{slug}', [HomeController::class, 'product'])->name('home.product');
Route::get('san-pham', [HomeController::class, 'product'])->name('product');
Route::get('tai-khoan', [HomeController::class, 'account'])->name('account');
Route::get('register', [HomeController::class, 'register'])->name('home.register');
Route::post('register', [HomeController::class, 'post_register']);

Route::group(['prefix' => 'admin'], function () {

    Route::get('', [AdminController::class, 'admin'])->name('admin');
    Route::resources([
        'category'=> CategoryController::class,
        'product'=> ProductController::class
    ]);

    // Route::group(['prefix' => 'category'], function () {
    //     Route::get('', [CategoryController::class, 'list'])->name('category.index');

    //     Route::delete('delete/{category}', [CategoryController::class, 'delete'])->name('category.delete');

    //     Route::get('create', [CategoryController::class, 'create'])->name('category.create');
    //     Route::post('store', [CategoryController::class, 'store'])->name('category.store');

    //     Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
    //     Route::put('update/{category}', [CategoryController::class, 'update'])->name('category.update');
    // });

    // Route::group(['prefix' => 'product'], function () {
    //     Route::get('', [ProductController::class, 'list'])->name('product.index');

    //     Route::delete('delete/{product}', [ProductController::class, 'delete'])->name('product.delete');

    //     Route::get('create', [ProductController::class, 'create'])->name('product.create');
    //     Route::post('store', [ProductController::class, 'store'])->name('product.store');

    //     Route::get('edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    //     Route::put('update/{product}', [ProductController::class, 'update'])->name('product.update');
    // });
});

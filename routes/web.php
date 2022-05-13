<?php

namespace App\Http\Controllers;
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
Route::get('login', [HomeController::class, 'login'])->name('home.login');
Route::post('login', [HomeController::class, 'post_login']);
Route::get('logout', [HomeController::class, 'logout'])->name('home.logout');

Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'check_login']);
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.index');
    Route::resources([
        'category'=> CategoryController::class,
        'product'=> ProductController::class
    ]);

    Route::group(['prefix' => 'category'], function () {
        Route::get('category/trashed', [CategoryController::class, 'trashed'])->name('category.trashed');
        Route::get('restore/{category}', [CategoryController::class, 'restore'])->name('category.restore');
        Route::delete('force-delete/{category}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
    });

    // Route::group(['prefix' => 'product'], function () {
    //     Route::get('', [ProductController::class, 'list'])->name('product.index');

    //     Route::delete('delete/{product}', [ProductController::class, 'delete'])->name('product.delete');

    //     Route::get('create', [ProductController::class, 'create'])->name('product.create');
    //     Route::post('store', [ProductController::class, 'store'])->name('product.store');

    //     Route::get('edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
    //     Route::put('update/{product}', [ProductController::class, 'update'])->name('product.update');
    // });
});

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

Route::get('',[HomeController::class,'home'])->name('home');
Route::get('danh-muc',[HomeController::class,'category'])->name('category');
Route::get('san-pham',[HomeController::class,'product'])->name('product');
Route::get('tai-khoan',[HomeController::class,'account'])->name('account');
?>
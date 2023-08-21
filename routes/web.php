<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ViewController;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\Admin\AboutController;
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
// Route::get('/', function () {
//     return view('User/welcome');
// });


Route::get('login', [AuthController::class ,'index'])->name('view.login');
Route::post('proses', [AuthController::class ,'login'])->name('login');
Route::get('register', [AuthController::class ,'index2'])->name('view.register');
Route::post('register/input', [AuthController::class ,'register'])->name('register');
Route::get('/', [AuthController::class ,'home'])->name('home');
Route::get('logout', [AuthController::class ,'logout'])->name('logout');

Route::get('product', [DashboardController::class ,'product'])->name('product');
Route::get('product-search/{id}', [DashboardController::class ,'product_search'])->name('search.product');
Route::get('product-detail/{id}', [DashboardController::class ,'product_detail'])->name('product.detail');
Route::get('proses', [AuthController::class ,'proses'])->name('proses');
Route::get('check', [OrderController::class, 'check']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('dashboard', [Viewcontroller::class ,'index'])->name('dashboard');

    Route::prefix('product')->group(function () {
        Route::get('product', [BarangController::class, 'index'])->name('barang');
        Route::post('tambah-product', [BarangController::class, 'store'])->name('add.barang');
        Route::put('edit-product', [BarangController::class, 'edit'])->name('put.barang');
        Route::get('delete-barang/{id}', [BarangController::class, 'delete'])->name('delete.barang');

        Route::prefix('category')->group(function () {
            Route::get('category', [CategoryController::class, 'index'])->name('category');
            Route::post('tambah-category', [CategoryController::class, 'store'])->name('add.category');
            Route::put('edit-category', [CategoryController::class,'edit'])->name('put.category');
            Route::get('delete-category/{id}', [CategoryController::class,'delete'])->name('delete.category');
        });
    });

    Route::prefix('customer')->group(function (){
        Route::get('customer', [CustomerController::class, 'index'])->name('customer');
        Route::put('edit-customer', [CustomerController::class, 'index'])->name('put.customer');
        Route::get('delete-customer/{id}', [CustomerController::class,'delete'])->name('delete.customer');
    });

    Route::prefix('order')->group(function (){
        Route::get('order', [OrderController::class, 'index'])->name('order');
        // Route::put('edit-customer', [CustomerController::class, 'index'])->name('put.customer');
        // Route::get('delete-customer/{id}', [CustomerController::class,'delete'])->name('delete.customer');
    });

    Route::prefix('about')->group(function (){
        Route::get('about', [AboutController::class, 'index'])->name('view.about');
        Route::post('tambah-about', [AboutController::class, 'store'])->name('add.about');
    });


});

Route::group(['middleware' => 'pelanggan'], function () {
    Route::prefix('home')->group(function () {
        // Route::get('dashboard', [DashboardController::class ,'index'])->name('dashboard.user');

        Route::get('cart', [CartController::class,'cart'])->name('view.cart');
        Route::post('add-cart', [CartController::class,'product_cart'])->name('add.cart');
        Route::get('delete-cart/{id}', [CartController::class,'delete'])->name('del.cart');
        Route::get('checkout', [CartController::class, 'order'])->name('checkout');
        Route::get('about', [DashboardController::class, 'about'])->name('about');
        Route::get('check_pesanan', [DashboardController::class, 'check_pesanan'])->name('check_pes');
        Route::get('check', [OrderController::class, 'check'])->name('check');
        Route::get('resi', [DashboardController::class, 'resi'])->name('cek_resi');
        Route::post('hasi-resi', [OrderController::class, 'resi'])->name('resi');
    });
});


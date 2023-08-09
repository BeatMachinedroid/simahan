<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\ViewController;
use App\Http\Controllers\Admin\BarangController;
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
Route::get('/', function () {
    return view('User/welcome');
});


Route::get('/login', [AuthController::class ,'index'])->name('view.login');
Route::post('/login/input', [AuthController::class ,'login'])->name('login');
Route::get('/register', [AuthController::class ,'index2'])->name('view.register');
Route::post('/register/input', [AuthController::class ,'register'])->name('register');
Route::get('/home', [AuthController::class ,'home'])->name('home');


Route::group(['middleware' => 'admin'], function () {
    Route::prefix('barang')->group(function () {
        Route::get('index.html', [BarangController::class, 'index'])->name('barang');
        Route::get('tambah-product.html', [BarangController::class, 'store'])->name('add.barang');
        
    });

    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [Viewcontroller::class ,'index'])->name('dashboard');
    });

});

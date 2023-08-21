<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Barang;
use App\Models\Cart;
use App\Models\About;
use App\Models\order;

class DashboardController extends Controller
{
    public function product(){
        $category = Category::all();
        $barang = Barang::all();
        $about = About::latest()->first();
        if (Auth::check()) {
            $cart = Cart::where('users_id', Auth::user()->id)->get();
            return view('User/product', compact('category','barang','about','cart'));
        }
        return view('User/product', compact('category','barang','about'));
    }

    public function product_search($id){
        $category = Category::all();
        $barang = Barang::where('category', decrypt($id))->get();
        if (Auth::check()) {
            $cart = Cart::where('users_id', Auth::user()->id)->get();
            return view('User/product', compact('category','barang','cart'));
        }
        return view('User/product', compact('category','barang'));
    }

    public function product_detail($id){
        $barang = Barang::findorfail(decrypt($id));
        if (Auth::check()) {
            $cart = Cart::where('users_id', Auth::user()->id)->get();
            return view('User/detail', compact('barang','cart'));
        }
        return view('User/detail', compact('barang'));
        // return $barang;
    }

    public function about() {
        $about = About::latest()->first();
        if (Auth::check()) {
            $cart = Cart::where('users_id', Auth::user()->id)->get();
            return view('User/about',compact('about','cart'));
        }
        return view('User/about',compact('about'));
    }

    public function check_pesanan() {
        $order = order::where('users_id', Auth::user()->id)->get();
        $cart = Cart::where('users_id', Auth::user()->id)->get();

        return view('User/order', compact('order','cart'));
    }

    public function resi(){
        $cart = Cart::where('users_id', Auth::user()->id)->get();
        return view('User/resi', compact('cart'));
    }


}

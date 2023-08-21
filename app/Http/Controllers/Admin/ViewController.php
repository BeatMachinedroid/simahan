<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Barang;
use App\Models\order;
use App\Models\User;

class ViewController extends Controller
{
    public function index(){
        $ordertotal = order::sum('total');
        $order = order::all();
        $product = Barang::all();
        $pelanggan = User::where('role', 'pelanggan')->get();
        return view('Admin/dashboard', compact('product', 'pelanggan', 'order', 'ordertotal'));
    }
}

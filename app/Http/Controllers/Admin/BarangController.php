<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class BarangController extends Controller
{
    public function index(){
        if(Auth::check()){
            $barang = Barang::paginate(5);
            $category = Category::all();
            return view('Admin/barang' , compact('barang','category'));
        }
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required|numeric',
            'stock' => 'required',
            'deskripsi' => 'required',
        ]);

        if($request->has('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $originalName = $image->getClientOriginalName();
            $image->storeAs('public/product/' , $originalName);
        }

        $barang = new Barang;
        $barang->name_barang = $request->name;
        $barang->category = $request->category;
        $barang->gambar = $originalName;
        $barang->harga = $request->price;
        $barang->stock = $request->stock;
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        return redirect()->route('view.menu')->with('message','Data created is successfully');



    }
}

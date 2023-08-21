<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;

class CustomerController extends Controller
{
    public function index(){
        if(Auth::check()){
            $customer = User::where('role', 'pelanggan')->paginate(5);
            return view('Admin/customer' , compact('customer'));
        }
    }

    public function edit(){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            // 'password' => 'required|min:6|confirmed',
            'no_telp' => 'required|min:12|max:13',
            'alamat' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ];

        $customer = User::findOrFail($request->id);
        $customer->update($data);
        return redirect()->route('customer')->with('message','Data created is successfully');
    }

    public function delete(Request $request){
        $customer = User::findOrFail(decrypt($request->id));
        $customer->delete();
        return redirect()->route('customer')->with('message','Data created is successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Barang;
use App\Models\About;
use App\Models\Cart;



class AuthController extends Controller
{
    // public function dashboard(){
    //     return view('dashboard.admin');
    // }

    public function index(){
        return view('Auth/login');
    }

    public function index2(){
        return view('Auth/register');
    }

    public function home(){
        $category = Category::all();
        $barang = Barang::paginate(15);
        $about = About::latest()->first();
        if (Auth::check()) {
            $cart = Cart::where('users_id', Auth::user()->id)->get();
            return view('User/welcome', compact('category','barang','about','cart'));
        }
        return view('User/welcome', compact('category','barang','about'));

    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('proses');
        }else{
            return redirect()->route('view.login')->with('message','email or password is incorrect!');
        }
    }

    public function proses(){
        if(Auth::user()->role == 'admin'){
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('home');
        }
    }

    public function register(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'no_telp' => 'required|min:12|max:13',
            'alamat' => 'required',
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
        ];

        if(User::create($data)){
            return redirect()->route('view.login');
        }else{
            return redirect()->route('view.register')->with('message','Failed to register');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('view.login');
    }

}

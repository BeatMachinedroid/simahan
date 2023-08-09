<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;



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
        return view('User/welcome');
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
            if(Auth::user()->role == 'admin'){
                return redirect()->route('dashboard');
            }else{
                return redirect()->route('home');
            }
        }else{
            return redirect()->route('login')->with('message','Email Or Password is Not Correct !!');
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

}

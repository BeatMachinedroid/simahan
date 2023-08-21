<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function index(){
        if(Auth::check()){
            $order = Order::with('pelanggan')->paginate();
            return view('Admin/order' ,compact('order'));
        }
    }

    public function check(){
        $orders = order::where('users_id', Auth::user()->id)->get('code_order');
            $orderStatuses = [];
            foreach ($orders as $order) {
                $id = $order->code_order;
                $response = Http::withBasicAuth('SB-Mid-server-j15In3QbSUFG1q414DT-iQNV', '')
                    ->get('https://api.sandbox.midtrans.com/v2/'.$id.'/status');
                $orderStatuses[$id] = $response->json();

                if($orderStatuses[$id]['transaction_status'] == 'settlement') {
                    Order::where('code_order', $order->code_order)->update([
                        'status' => 'sudah dibayar',
                    ]);
                }
            }
            return redirect()->route('check_pes');
    }

    public function resi(Request $request){
        $apikey = '581aeb571ffac3b909044dd4ecd55bddc6ce49a23b0f351e06e0b1d8e69b6df6';
        $courir = $request->courier;
        $awb = $request->awb;
        $response = Http::get('https://api.binderbyte.com/v1/track?api_key='.$apikey.'&courier='.$courir.'&awb='.$awb.'');
        $result = $response->json();
        // return $result;
        $cart = Cart::where('users_id', Auth::user()->id)->get();
        return view('User.resi',compact('result','cart'));
    }

}

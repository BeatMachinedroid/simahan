<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Barang;
use App\Models\Cart;
use App\Models\order;

class CartController extends Controller
{
    public function cart(){
        if(Auth::check()){
            $cart = Cart::where('users_id', Auth::user()->id)->get();
            $snapToken = null;
            // return $cart;
            return view('User.cart', compact('cart','snapToken'));
        }
    }

    public function checkout(Request $request){
        $chart = Cart::where('users_id', Auth::user()->id)->with('pelanggan')->with('barang')->all();
        return $chart;
        return view('User.checkout', compact('chart'));
    }

    public function delete($id){
        $cart = Cart::findOrFail(decrypt($id));
        $cart->delete();
        return redirect()->route('view.cart')->with('message','Data deleted is successfully');
    }

    public function product_cart(Request $request){
        $data = [
            'users_id' => Auth::user()->id,
            'barang_id' => $request->barang,
            'jumlah' => $request->jumlah,
        ];
        Cart::create($data);
        return redirect()->route('product')->with('message','success add in cart');
    }

    public function order(){
        $orderId = 'order'.'-'.substr(uniqid(), 5, 13);
        $grossamount = 0;
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $notelp = Auth::user()->no_telp;

        $cart = Cart::with('product')->where('users_id', Auth::user()->id)->get();
        foreach ($cart as $item) {
            $grossamount += $item->product->harga * $item->jumlah;
        }

        $data = [
            'code_order' => $orderId,
            'users_id' => Auth::user()->id,
            'alamat' => Auth::user()->alamat,
            'total' => $grossamount,
            'status' => 'belum dibayar',
        ];

        $order = order::create($data);
        $idorder = order::find($order->code_order_id);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-j15In3QbSUFG1q414DT-iQNV';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $orderId,
                'gross_amount' => $grossamount,
            ),
            'customer_details' => array(
                'first_name' => 'Pelanggan-',
                'last_name' => $username,
                'email' => $email,
                'phone' => $notelp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        if($order){
            Cart::where('users_id', Auth::user()->id)->delete();
        }

        return view('User.payment' , compact('snapToken'));
        // return response()->json(['snap_token' => $snapToken]);
    }
}

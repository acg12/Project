<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // $userId = Auth::user()->id
    // user_id	product_id	quantity
    public function addToCart(Request $req, $prodId) {
        $userId = 1;
        $quantity = $req->quantity;

        $cart = new Cart();
        $cart->user_id = $userId;
        $cart->product_id = $prodId;
        $cart->quantity = $quantity;
        $cart->save();
        
        return redirect()->back();
    }

    public function deleteCart($cartId){
        $cart = Cart::find($cartId);
        $cart->delete();
        // truncate id counter -> could misleading
        // Cart::truncate();
        
        return redirect()->back();
    }

    public function showCart(){
        $cart = Cart::all();

        return view('cart', ['cart' => $cart]);
    }

    public function updateQuantity(Request $req, $cartId){
        $product = Cart::find($cartId);
        $product->quantity = $req->qty;
        $product->save();

        return redirect()->back();
    }

}

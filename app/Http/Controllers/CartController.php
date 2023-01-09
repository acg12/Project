<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    // $userId = Auth::user()->id
    // user_id	product_id	quantity
    public function addToCart(Request $req, $prodId) {
        $userId = 1;
        $productStock = Product::find($prodId)->first()->stock;

        $rules = [
            'quantity' => "required|integer|min:1|max:$productStock"
        ];

        $message = [
            'quantity.max' => "Quantity has exceeded stock of $productStock",
            'quantity.min' => "You can order at least 1",
        ];

        $validator = Validator::make($req->all(), $rules, $message);

        if($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $cart = new Cart();
            $cart->user_id = $userId;
            $cart->product_id = $prodId;
            $cart->quantity = $req->quantity;
            $cart->save();

            return redirect()->back();
        }
    }

    public function deleteCart($cartId){
        $cart = Cart::find($cartId);
        $cart->delete();
        // truncate id counter -> could misleading
        // Cart::truncate();
        
        return redirect()->back();
    }

    public static function deleteCarts($userId){
        Cart::where('user_id', $userId)->delete();
        return;
    }

    public function showCart(){
        $cart = Cart::all();

        return view('cart', ['cart' => $cart]);
    }

    public function updateQuantity(Request $req, $cartId){
        $productStock = Cart::find($cartId)->first()->product->stock;

        $rules = [
            'qty' => "required|integer|min:1|max:$productStock"
        ];

        $message = [
            'qty.max' => "Quantity has exceeded stock of $productStock",
            'qty.min' => "You can order at least 1",
        ];

        $validator = Validator::make($req->all(), $rules, $message);
        
        if ($validator->fails()) {
            return back()->withErrors($validator);
        } else {
            $cart = Cart::find($cartId);
            $cart->quantity = $req->qty;
            $cart->save();

            return redirect()->back();
        }
    }

}

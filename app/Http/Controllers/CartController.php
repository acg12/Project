<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // $userId = Auth::user()->id
    // user_id	product_id	quantity
    public function addToCart(Request $req, $id) {
        $userId = 1;
        $quantity = $req->quantity;

        DB::table('carts')->insert([
            'user_id' => $userId,
            'product_id' => $id,
            'quantity' => $quantity,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return redirect()->back();
    }
}

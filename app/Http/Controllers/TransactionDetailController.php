<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public static function addTransactionDetail($id, $userId){
        $cart = Cart::where('user_id', $userId)->get();
        
        foreach($cart as $cartItem){
            $transactionDetail = new TransactionDetail();
            $transactionDetail->transaction_id = $id;
            $transactionDetail->product_id = $cartItem->product_id;
            $transactionDetail->quantity = $cartItem->quantity;
            $transactionDetail->save();
        }

        return;
    }
}

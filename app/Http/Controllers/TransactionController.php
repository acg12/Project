<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function checkout($id){
        $transaction = new Transaction();
        $transaction->user_id = $id;
        $transaction->save();

        TransactionDetailController::addTransactionDetail($transaction->id, $transaction->user_id);
        CartController::deleteCarts($transaction->user_id);
        ProductController::reduceQty($transaction->id);

        return redirect()->back();
    }
}

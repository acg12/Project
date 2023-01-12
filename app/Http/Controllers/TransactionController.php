<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function checkout(){
        $id = Auth::user()->id;
        if(CartController::cartIsEmpty($id)) {
            return redirect()->back();
        }

        $transaction = new Transaction();
        $transaction->user_id = $id;
        $transaction->save();

        TransactionDetailController::addTransactionDetail($transaction->id, $transaction->user_id);
        CartController::deleteCarts($transaction->user_id);
        ProductController::reduceQty($transaction->id);

        return view('successCheckout');
    }

    public function viewTransactions() {
        $user_id = Auth::user()->id;
        $transactions = Transaction::where('user_id', $user_id)->orderBy('created_at', 'DESC')->get();
        // $transactions = Transaction::where('user_id', $user_id)->get();
        return view('transactions', ['transactions' => $transactions]);
    }
}

<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transactionDetails(){
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    public function getDate() {
        $date = $this->created_at->format('d M Y');
        return $date;
    }

    public function getTotal() {
        $details = $this->transactionDetails;
        $sum = 0;
        foreach($details as $d) {
            $sum += $d->quantity * $d->product->price;
        }
        return number_format($sum, 0, ',', '.');
    }
}

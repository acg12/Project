<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    public function transaction(){
        return $this->belongsTo(Transaction::class, 'id', 'transaction_id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }
}

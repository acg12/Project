<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id', 'id');
    }

    public function transactionDetails()
    {
        return $this->hasMany(Transaction::class, 'product_id', 'id');
    }
}

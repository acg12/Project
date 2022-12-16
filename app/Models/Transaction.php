<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function transcationDetails(){
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }
}

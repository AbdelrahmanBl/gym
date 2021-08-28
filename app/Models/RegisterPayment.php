<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterPayment extends Model
{
    protected $fillable = [
        'order_id',
        'amount',
        'currency',
        'responds',
    ];
}

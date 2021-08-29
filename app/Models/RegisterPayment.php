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
        'gender'
    ];

    public function getGetRespondsAttribute() {
        return collect(json_decode($this->responds))->toArray();
    }
}
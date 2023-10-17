<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'amount',
        'state',
        'payment_type',
        'policy_id',
        'data',
    ];
}

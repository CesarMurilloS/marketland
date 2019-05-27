<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'id_order',
        'id_product',
        'status',
        'quantity',
        'subtotal'
    ];
}

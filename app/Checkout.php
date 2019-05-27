<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'id_order',
        'card_number',
        'card_holder',
        'expiry_month',
        'expiry_year',
        'cvc',
        'country',
        'zip',
        'status'
    ];
}

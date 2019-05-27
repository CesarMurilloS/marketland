<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id_user',
        'id_product',
        'review',
        'comment',
        'comment_status'
    ];
}

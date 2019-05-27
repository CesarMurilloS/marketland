<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id_category',
        'name',
        'description',
        'price',
        'review',
        'image_path'
    ];
}

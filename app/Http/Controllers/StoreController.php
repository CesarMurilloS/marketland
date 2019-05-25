<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }
}

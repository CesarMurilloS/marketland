<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        return view('store.index', ['products' => $products]);
        return view('store.index');
    }

    public function getCart(){//Session only
        $products = Product::all();
        return view('store.cart', ['products' => $products]);
        return view('store.cart');
    }

    public function getOrder(){
        $products = Product::all();
        return view('store.order', ['products' => $products]);
        return view('store.order');
    }

    public function getOrders(){//All the orders that already habe been done
        $products = Product::all();
        return view('store.orders', ['products' => $products]);
        return view('store.orders');
    }
}

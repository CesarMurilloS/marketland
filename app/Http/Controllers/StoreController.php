<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Support\Facades\Input;


use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function getIndex(){
        $products = Product::all();
        $categories = Category::all();

        return view('store.index', ['categories' => $categories, 'products' => $products]);
    }

    public function getCart(){//Session only
        $products = Product::all();
        $categories = Category::all();

        return view('store.cart', ['categories' => $categories, 'products' => $products]);
        return view('store.cart');
    }

    public function getSearch(){
        //$key = Input::get('key');
        $key = request()->query('key');

        $products = Product::find($key);
        $categories = Category::all();


        return view('store.index', ['categories' => $categories, 'products' => $products, 'key' => $key]);
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

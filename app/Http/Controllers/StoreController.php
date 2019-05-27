<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Cart;

use App\Product;
use App\Category;

use Stripe\Stripe;


use Session;

use Illuminate\Support\Facades\Input;


use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function getIndex(){
        //$products = Product::all();

        $products = Product::query();

            $products->select('products.*', 'categories.name as category');
            $products->join('categories', 'products.id_category', '=', 'categories.id');

        $products = $products->distinct()->get();

        $categories = Category::all();

        return view('store.index', ['categories' => $categories, 'products' => $products]);
    }


    public function getSearch(){
        //$key = Input::get('key');
        $key = request()->query('key');

        $categories = Category::all();

        /*
        $products = Product::find($key);

        $products = Users::where('status_id', 'active')
            ->where('created_at', '>', Carbon::now()->subDays(30))
            ->get();

        $pieces = explode(" ", $pizza);




        $products = Product::where('name', 'like', '%' . $key . '%')
            ->orWhere('description', 'like', '%' . $key . '%')
            ->get();

        $data = News::order_by('news.id', 'desc')
        ->join('categories', 'news.category_id', '=', 'categories.id')
        ->join('users as u1', 'news.user_id', '=', 'u1.id') // ['created_by']
        ->join('users as u2', 'news.modified_by', '=', 'u2.id') // ['modified_by']
        ->paginate(30, array('news.title', 'categories.name as categories', 'u1.name as creater_username', 'u2.name as modifier_username'));

        str_slug($category->name, '+')
        'slug', '=', str_slug($title)

        */
        $searchWords = explode(" ", $key);

        $products = Product::query();

            $products->select('products.*', 'categories.name as category');
            $products->join('categories', 'products.id_category', '=', 'categories.id');

            foreach ($searchWords as $word) {
                $products->where('categories.name', 'LIKE', '%' . $word . '%');
                $products->orWhere('products.name', 'LIKE', '%' . $word . '%');
                $products->orWhere('products.description', 'LIKE', '%' . $word . '%');

            }
        $products = $products->distinct()->get();



        return view('store.index', ['categories' => $categories, 'products' => $products, 'key' => $key]);
    }

    public function getOrder($id){
        $products = Product::all();
        $categories = Category::all();
        $order = Order::find($id);


        return view('store.order', ['categories' => $categories,'products' => $products]);
    }

    public function getOrders(){//All the orders that already habe been done
        $products = Product::all();
        $categories = Category::all();
        $orders = Order::all();
        return view('store.orders', ['categories' => $categories,'products' => $products]);
    }

    public function getAddToCart(Request $request, $id){//Add product to cart
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $categories = Category::all();


        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('store.index', ['categories' => $categories]);

    }

    public function getCart(){
        $categories = Category::all();
        if(!Session::has('cart')){
            return view('store.cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('store.cart', ['categories' => $categories, 'products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }


    public function getCheckout(){
        $categories = Category::all();
        if(!Session::has('cart')){
            return view('store.cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('store.checkout', ['categories' => $categories, 'total' => $total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('store.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_YXRDjOjZfcqNkNCjXCovu5N400J2q4emsM');
        try{
            Charge::create(array(
                //Stripe use cents so we multiply cents by 100 to get dollars
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), //Obtained with Stripe.js
                "description" => "Test Charge"
            ));

        } catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchase products');

    }

    public function getProduct($id){//Add product to cart
        $product = Product::find($id);
        $categories = Category::all();

        return view('store.product', ['categories' => $categories,'product' => $product]);

    }


}

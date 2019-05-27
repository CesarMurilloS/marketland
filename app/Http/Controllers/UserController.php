<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2|max:30',
            'lastname' => 'required|min:2|max:30',
            'email' => 'email|required|unique:users|max:255',
            'password' => 'required|min:8|max:255',
            'username' => 'required|unique:users|min:4|max:255',
            'phone' => 'required|unique:users|numeric|min:10|max:10',
        ]);



        $user = new User([
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'username' => $request->input('username'),
            'phone' => $request->input('phone')

        ]);

        $user->save();

        Auth::login($user);

        return redirect()->route('store.index');

    }

    public function getSignin(){
        return view('user.signin');
    }

    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:8|max:255',
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password'=>$request->input('password')])){
            return redirect()->route('user.profile');
        }
        return redirect()->back();
    }

    public function getProfile(){

        $categories = Category::all();
        return view('user.profile', ['categories' => $categories])->with('user', auth()->user());
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->back();
    }
}

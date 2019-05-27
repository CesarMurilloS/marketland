<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Illuminate\Validation\Rule; //import Rule class


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
            'phone' => 'required|unique:users|numeric',
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

    public function postEditProfile(Request $request){

        $user = auth()->user();

        $this->validate($request, [
            'name' => 'required|min:2|max:30',
            'lastname' => 'required|min:2|max:30',
            'email' => 'email|max:255|unique:users,email,'.$user->id,
            'password' => 'required|min:8|max:255',
            'username' => 'required|min:4|max:255|unique:users,username,'.$user->id,
            'phone' => 'required|numeric|unique:users,phone,'.$user->id,
        ]);


        $user->name = $request->input('name'); // Name of the input field here
        $user->lastname = $request->input('lastname'); // Name of the input field here
        $user->email = $request->input('email'); // Name of the input field here
        $user->password = $request->input('password'); // Name of the input field here
        $user->username = $request->input('username'); // Name of the input field here
        $user->phone = $request->input('phone'); // Name of the input field here
        $user->save(); // no validation implementedenter code here



        /*if (!$request->filled('password')) {
            $user->fill($input)->save();

            return back()->with('success_message', 'Profile updated successfully!');
        }

        $user->password = bcrypt($request->password);
        $user->fill($input)->save();*/



        return redirect()->route('user.profile');


    }

    public function getEditProfile(){
        $categories = Category::all();
        return view('user.edit_profile', ['categories' => $categories])->with('user', auth()->user());
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

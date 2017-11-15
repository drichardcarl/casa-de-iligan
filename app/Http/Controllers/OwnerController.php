<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Auth;


class OwnerController extends Controller
{
    public function loginPage(){
        return view('pages.owner-login');
    }
    public function registerPage(){
        return view('pages.owner-register');
    }
    public function login(Request $request){
        $request->flashExcept('password');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'user_type' => $request->user_type])){
            return redirect('/')->with('status', 'Logged in!');
        }
        return redirect()->back()->withErrors(['Invalid Credentials!']);
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
    public function register(Request $request){
        
        // return $request->all();
        $this->validation($request);
        $pw = $request->all()['password'];
        $request->merge(['password' => bcrypt($pw)]);
        User::create($request->all());
        return redirect('/')->with('Status','You are registered!');
    }
    public function validation(Request $request){
        return $this->validate($request,[
            'name' => 'required|unique:users,name|min:4|max:255',
            'address' => 'required|min:4|max:255',
            'contact_number' => 'required|numeric',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|confirmed|min:8|max:255',
        ]);
    }
}

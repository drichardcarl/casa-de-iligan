<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CDILoginController extends Controller
{
    public function login(Request $request){
        $this->validation($request);
        $pw = $request->all()['password'];
        $request->merge(['password' => bcrypt($pw)]);
        User::create($request->all());
        return redirect('/')->with('Status','You are registered!');
    }
    public function validation(Request $request){
        return $this->validate($request,[
            'name' => 'required|unique:users,name|min:4|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|confirmed|min:8|max:255',
        ]);
    }
}

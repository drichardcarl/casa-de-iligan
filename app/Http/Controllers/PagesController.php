<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about-us');
    }
    public function register(){
        return view('pages.register');
    }
    public function owner(){
        return view('pages.owner');
    }
    public function customer(){
        return view('pages.customer');
    }
}

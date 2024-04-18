<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.layouts.home');
    }

    public function about(){
       return view('frontend.layouts.about');
    }

    public function service(){
       return view('frontend.layouts.service');
    }

    public function contact(){
        return view('frontend.layouts.contact');
    }

}
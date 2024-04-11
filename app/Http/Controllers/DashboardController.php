<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Backend.dashboard');
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
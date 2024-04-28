<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahEventController extends Controller
{
    public function index(){
        return view('Backend.event.tambah_event');
    }
}
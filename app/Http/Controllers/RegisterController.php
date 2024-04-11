<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('Frontend.layouts.register');
    }

    public function register(Request $request){
        $request->validate([
            'nama'=> 'required',
            'email'=> 'required|string',
            'password'=>'required|string|min:6',
        ],[
            'nama.required'=> 'Nama wajib diisi',
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi', 
            'password.min'=>'Password diisi min 6 karakter',           
        ]);

        User::create([
            'name'=> $request->nama,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'jabatan'=> 'pembuat'
        ]);

        return redirect()->back()->with('succes','Data Berhasil Dibuat');
        
    }

    
}
<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function index()
    {
        return view('frontend/layouts.login');
    }

    public function forgot_pw()
    {
        return view('frontend/layouts.forgotpassword');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password diisi min 6 karakter',

        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->jabatan == 'admin') {
                return redirect()->intended('verifikasi_event');
            } else {
                return redirect()->intended('event');
            }
        }
        return redirect()->route('login')->with('loginError', 'Login Gagal!');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }





    public function unauthorized()
    {
        return view("eror-unauthorized");
    }
}
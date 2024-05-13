<?php

namespace App\Http\Controllers;


use App\Models\ResetToken;
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



    // public function forgot_pw_send(Request $request){
    //     $customMessageError = [
    //         'email.required' => 'Email wajib diisi',
    //         'email.email' => 'Email tidak valid',
    //         'email.exsits' => 'Email tidak terdaftar di database',
    //     ];

    //     $request->validate([
    //         'email' => 'required|email|exists:users,email'
    //     ],$customMessageError);

    //     ResetToken::updateOrCreate(
    //         [
    //             'email' => $request->email
    //         ],[
    //         'email' => $request->email,
    //         'token' => \Str::random(60),
    //         'created_at' => now(),
    //         ]
    //     );

    //     $data = [
    //          'email' => $request->email
    //     ];
    //     return redirect()->route('forgot_password')->with('succes', 'Kami telah mengirimkan link reset password ke email anda!');
    // }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'Email wajib diisi',
            'email.exsits' => 'Email tidak terdaftar di database',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password diisi min 6 karakter',

        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->jabatan == 'admin') {
                return redirect()->intended('verifikasi_event');
            } else {
                if (Auth::user()->jabatan == 'pembuat') {
                    return redirect()->intended('event');
                }
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
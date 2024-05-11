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
           'nama_lengkap' => 'required|string',
            'nama_perusahaan' => 'required|string|unique:users,nama_perusahaan',
            'alamat_perusahaan' => 'required|string',
            'no_telp' => 'required',
            'email'=> 'required|string|unique:users,email',
            'password'=>'required|string|min:6|confirmed',
        ],[
            'nama_lengkap.required' => 'Nama lengkap wajib diisi',
            'nama_perusahaan.required' => 'Nama perusahaan wajib diisi',
            'nama_perusahaan.unique' => 'Nama perusahaan sudah digunakan',
            'alamat_perusahaan.required' => 'Alamat perusahaan wajib diisi',
            'no_telp.required' => 'Nomor telepon wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email harus berformat email yang valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password wajib diisi',
            'password.confirmed' => 'Konfirmasi password tidak sama',
            'password.min' => 'Password harus terdiri dari minimal 6 karakter',
        ]);

      
    //    $fileName = '';
    //     if($request->hasFile('ktp_pemilik')){
    //         $fileName = $request->file('ktp_pemilik')->store('uploads/ktp', 'public');
    //     }
    
        $user = User::create([
           'nama_lengkap' => $request->nama_lengkap,
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat_perusahaan' => $request->alamat_perusahaan,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jabatan' => 'pembuat',
        ]);
        return redirect()->route('login')->with('succes','Data Berhasil Dibuat');    
    }

}
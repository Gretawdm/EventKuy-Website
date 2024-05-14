<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user=auth()->user();
        $data['user']=$user;
        return view('Backend.profile.profile', $data);
    }
    public function edit_profile()
    {
        $user=auth()->user();
        $data['user']=$user;
        return view('Backend.profile.edit_profile',$data);
    }
    public function ubah_password()
    {
        return view('Backend.profile.ubah_password');
    }
    public function update_profile(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'alamat_perusahaan' => 'required',
            'no_telp' => 'required|string|regex:/^\d{11,13}$/',
            'email' => 'required|email'
        ], [
            'nama_perusahaan.required' => 'Nama Perusahaan harus diisi',
            'alamat_perusahaan.required' => 'alamat harus diisi',
            'no_telp.required' => 'no telepon harus diisi',
            'no_telp.regex' => 'Nomor telepon harus berupa angka dan memiliki panjang minimal 11 digit dan maksimal 13 digit',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
        ]);
        $user=auth()->user();
        $user->update([
            'nama_perusahaan'=>$request->nama_perusahaan,
            'alamat_perusahaan'=>$request->alamat_perusahaan,
            'no_telp'=>$request->no_telp,
            'email'=>$request->email
        ]);
        return redirect()->route('edit_profile')->with('success','profile berhasil di edit');
    }
    public function update_password(Request $request){
        $request->validate([
           'old_password'=>'required|min:6',
           'new_password'=>'required|min:6',
           'confirm_password'=>'required|same:new_password'
            
        ]);
        $current_user=auth()->user();
        if(Hash::check($request->old_password,$current_user->password )){
            $current_user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('succsess','Password berhasil diubah');
        }else{
            return redirect()->back()->with('error','Current Password Salah');
        }
    } 
}
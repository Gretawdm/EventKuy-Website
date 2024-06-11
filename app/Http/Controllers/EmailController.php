<?php

namespace App\Http\Controllers;

use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class EmailController extends Controller
{
    public function sendcode(Request $request)
    {
        // Retrieve the email value from the request
        $address = $request->input('email');

        // Generate a random verification code
        $verificationCode = rand(100000, 999999);

        // Create a new instance of VerificationEmail and pass the verification code to it
        $email = new VerificationEmail($verificationCode);

        // Debugging: Check if the email address and verification code are correctly set
        \Log::info('Sending verification code: ' . $verificationCode . ' to email: ' . $address);

        // Send the email using Laravel's Mail facade
        Mail::to($address)->send($email);

        $user = User::where('email', $address)->firstOrFail();
        $user->otp = $verificationCode;
        $user->save();
        // $minutes = 60; // The code will be valid for 60 minutes
        // Cache::put('verification_code_' . $address, $verificationCode, $minutes);

        // Debugging: Check if there were any failures
        // if (Mail::failures()) {
        //     \Log::error('Failed to send email to: ' . $address);
        //     return response()->json(['message' => 'Failed to send email'], 500);
        // } else {
        //     \Log::info('Email successfully sent to: ' . $address);

        //     return response()->json(['message' => 'Verification email sent successfully'], 200);
        // }


    }

    public function validateOtp(Request $request)
    {
        // Retrieve the email and OTP from the request
        $address = $request->input('email');
        $inputOtp = $request->input('otp');

        // Find the user by email
        $user = User::where('email', $address)->first();

        if ($user) {
            // Log the input values for debugging
            \Log::info('Input email: ' . $address);
            \Log::info('Input OTP: ' . $inputOtp);
            \Log::info('Stored OTP for user ' . $address . ': ' . $user->otp);

            // Check if the input OTP matches the stored OTP
            if ($user->otp == $inputOtp) {
                // OTP is valid
                return response()->json(['message' => 'OTP is valid'], 200);
            } else {
                // OTP is invalid
                // return response()->json(['message' => 'Invalid OTP'], 400);
            }
        } else {
            // User not found
            return response()->json(['message' => 'User not found'], 404);
        }
    }


    public function respass(Request $request){
        $address = $request->input('email');
        $newpass = $request->input('new_password');

        $user = User::where('email',$address)->first();

        
        if ($user) {
            // Log the input values for debugging
            \Log::info('Input email: ' . $address);
            \Log::info('Input NewPass: ' . $newpass);
            \Log::info('Stored password for user ' . $address . ': ' . $user->password);

            $user->password = $newpass;
            $user->save(); 

            return view('Frontend.layouts.login')->with('Succes', 'Password Berhasil Diubah');
    }
}


    public function clearOtpCache(Request $request)
    {
        $address = $request->input('email');
        Cache::forget('verification_code_' . $address);
        Log::info('OTP cache cleared for email: ' . $address);
        return response()->json(['message' => 'OTP cache cleared successfully'], 200);
    }


}
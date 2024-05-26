<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VerificationEmail;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

class EmailController extends Controller
{
    public function sendcode(Request $request){
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

        $minutes = 60; // The code will be valid for 60 minutes
        Cache::put('verification_code_' . $address, $verificationCode, $minutes);
    
        // Debugging: Check if there were any failures
        // if (Mail::failures()) {
        //     \Log::error('Failed to send email to: ' . $address);
        //     return response()->json(['message' => 'Failed to send email'], 500);
        // } else {
        //     \Log::info('Email successfully sent to: ' . $address);
           
        //     return response()->json(['message' => 'Verification email sent successfully'], 200);
        // }

        
    }

    public function validateOtp(Request $request) {
        $address = $request->input('email');
        $inputOtp = $request->input('otp');

        // Retrieve the stored verification code from cache
        $storedOtp = Cache::get('verification_code_' . $address);

        if ($storedOtp && $inputOtp == $storedOtp) {
            // OTP is valid
            Log::info('OTP verified for email: ' . $address);
            return response()->json(['message' => 'OTP verified successfully'], 200);
        } else {
            // OTP is invalid
            Log::warning('Invalid OTP attempt for email: ' . $address);
            return response()->json(['message' => 'Invalid OTP'], 400);
        }
}

        public function clearOtpCache(Request $request) {
            $address = $request->input('email');
            Cache::forget('verification_code_' . $address);
            Log::info('OTP cache cleared for email: ' . $address);
            return response()->json(['message' => 'OTP cache cleared successfully'], 200);
        }


}

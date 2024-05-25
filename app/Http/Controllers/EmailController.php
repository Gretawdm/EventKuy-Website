<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail;

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
    
        // Debugging: Check if there were any failures
        // if (Mail::failures()) {
        //     \Log::error('Failed to send email to: ' . $address);
        //     return response()->json(['message' => 'Failed to send email'], 500);
        // } else {
        //     \Log::info('Email successfully sent to: ' . $address);
        //     return response()->json(['message' => 'Verification email sent successfully'], 200);
        // }
    }
    

}

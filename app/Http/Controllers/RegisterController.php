<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');

        if ($password !== $passwordConfirmation) {
            return redirect()->back()->withInput()->with('error', 'Password and password confirmation do not match.');
        }

        // Generate a random password
        $password = Str::random(8);

        // Create and save the user
        $user = User::create([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phone' => $phone,
            'email' => $email,
            'password' => $password,
            'role' => 'user',
        ]);

        // Send the welcome email with the password
        Mail::to($user->email)->send(new WelcomeMail($user, $password));

        // Log the user in
        Auth::login($user);

        return redirect()->route('login')->with('success', 'Registration successful! Please check your email for your password.');
    }
}

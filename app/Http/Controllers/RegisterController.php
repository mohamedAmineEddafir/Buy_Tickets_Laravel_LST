<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
 

class RegisterController  extends Controller{
    public function register (Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName= $request->input('last_name');
        $phone= $request->input('phone');
        $email = $request->input('email');
        $password = $request->input('password');
        $passwordConfirmation = $request->input('password_confirmation');

        if ($password !== $passwordConfirmation){
            return redirect() ->back()->withInput()->with('error', 'Password and password confirmation do not match ');
        }

        DB::table('users')->insert([
            'firstName' =>  $firstName,
            'lastName' =>  $lastName,
            'phone' =>  $phone,
            'email' => $email,
            'password' => bcrypt($password),
            'role' => 'user',
        ]);
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
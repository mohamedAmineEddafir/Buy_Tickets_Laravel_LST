<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = DB::table('users')->where('email', $email)->first();

        if ($user && password_verify($password, $user->password)) {
            Session::put('email', $email);
            return redirect()->route('client.index');
        } else {
            return redirect()->back()->with('error', 'Invalid Email or Password')->withInput();
        }
    }
}

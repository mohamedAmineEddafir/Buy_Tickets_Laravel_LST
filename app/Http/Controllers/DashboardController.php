<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function show()
    {

        if(Session::get('email') === null) {
            return redirect()->route('login');
        }

        if(Session::get('role') === 'admin') {
            return view('admin.dashbord');
        } else {
            return view('client.index');
        }

    }
}

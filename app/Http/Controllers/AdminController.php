<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashbord(){
        return view('admin.dashbord');
    }
    
    public function events(){
        return view('admin.events');
    }
    public function my_teams(){
        return view('admin.my_teams');
    }
}

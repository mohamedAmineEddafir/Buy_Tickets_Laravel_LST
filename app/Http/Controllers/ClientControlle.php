<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientControlle extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function exploreEvents()
    {
        return view('client.explore_events');
    }

    public function onlineEventDetailView()
    {
        return view('client.online_event_detail_view');
    }

    public function venueEventDetailView()
    {
        return view('client.venue_event_detail_view');
    }

    public function contactUs()
    {
        return view('client.contact_us');
    }

    public function signUp()
    {
        return view('client.sign_up');
    }

    public function signIn()
    {
        return view('client.sign_in');
    }

    public function forgotPassword()
    {
        return view('client.forgot_password');
    }

    public function aboutUs()
    {
        return view('client.about_us');
    }
}

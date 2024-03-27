<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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





    public function createaccount(Request $request){
        $this->validate($request,[
            'first_name' => 'required|max:30',
            'last_name' => 'required|max:30',
            'email' => 'required|email|unique:clients',
            'phone' => 'nullable|string|max:255',
            'password' => 'required|min:4',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('avatars'), $avatarName);
        } else {
            $avatarName = null;
        }
        $client=new Client();
        $client->first_name=$request->input('first_name');
        $client->last_name=$request->input('last_name');
        $client->email=$request->input('email');
        $client->phone=$request->input('phone');
        $client->password=bcrypt($request->input('password'));
        $client->avatar = $avatarName;
        $client->save();
        return redirect('/sign_in')->with('success', 'Your account has been successfully created.');
    }

    public function accessaccount(Request $request){
        $this->validate($request,[
            'email'=>'email|required'
        ]);

        $client= Client::where('email',$request->email)->first();
        if($client){
            if(hash::check($request->input('password'),$client->password)){
                Session::put('client',$client);
                return redirect('/');
            }
            return back()->with('error','Wrong Password or Email');
        }
        return back()->with('error','You do not have an account with this email');
    }


}

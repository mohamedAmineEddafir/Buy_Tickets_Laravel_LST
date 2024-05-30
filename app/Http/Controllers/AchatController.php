<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


use Illuminate\Http\Request;

class AchatController extends Controller
{
    public function achat(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $address = $request->input('address');
        $country = $request->input('country');
        $city = $request->input('city');

        $id = Session::get('id');
        DB::table('achat')->insert([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'address' => $address,
            'country' => $country,
            'city' => $city,
            'user_id' => $id,
        ]);

        return redirect()->route('confirmeTicket')->with('success', 'Checkout successful!');
    }
    public function confirmeTicket()
    {
    return view('client.confirmeTicket');
    }
}

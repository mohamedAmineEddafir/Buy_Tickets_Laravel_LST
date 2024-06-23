<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Event;
use PDF;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        return redirect()->route('confirmeTicketId', ['id' => $request->eventId]);
    }
    // public function confirmeTicket()
    // {
    // return view('client.confirmeTicket');
    // }


    public function showpConfirmation($id)
    {
      $event = Event::find($id);
      $event = Event::join('users', 'events.user_id', '=', 'users.id')
                        ->select('events.*' , 'users.firstName', 'users.lastName')
                        ->find($id);
      return view('client.confirmeTicket', ['event' => $event]);
    }

    // public function showpticktfinale($id)
    // {
    //   $event = Event::find($id);
    //   $event = Event::join('users', 'events.user_id', '=', 'users.id')
    //                     ->select('events.*', 'users.firstName', 'users.lastName')
    //                     ->find($id);
    //   return view('client.tickt_finale', ['event' => $event]);
    // }

     public function showpticktfinale($id)
     {
         $event = Event::findOrFail($id);

        // Générer le contenu de l'attestation PDF
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('client.tickt_finale', compact('event'));

        // Retourner le contenu PDF pour affichage ou téléchargement
        return $pdf->stream('tickt_finale.pdf');
    
      }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Event;
use Illuminate\Http\Request;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\Writer\PngWriter;

class AchatController extends Controller
{
    // Méthode pour générer un code QR unique
    private function generateUniqueQRCode($userId, $achatId)
    {
        $qrData = 'user_' . $userId . '_achat_' . $achatId;

        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($qrData)
            ->encoding(new Encoding('UTF-8'))
            ->size(150)
            ->margin(10)
            ->build();

        // Retourne l'image QR code en base64
        return base64_encode($result->getString());
    }

    // Méthode pour gérer l'achat
    public function achat(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $address = $request->input('address');
        $country = $request->input('country');
        $city = $request->input('city');

        $userId = Session::get('id');
        // Enregistrez les données dans la table "achat"
        $achatId = DB::table('achat')->insertGetId([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'address' => $address,
            'country' => $country,
            'city' => $city,
            'user_id' => $userId,
        ]);

        // Générez un code QR unique en utilisant l'ID de l'utilisateur et l'ID de l'achat
        $codeQR = $this->generateUniqueQRCode($userId, $achatId);

        // Mettez à jour l'achat avec le code QR généré
        DB::table('achat')->where('id', $achatId)->update(['codeQR' => $codeQR]);

        // Stockez le code QR dans la session
        Session::put('codeQR', $codeQR);

        // Redirigez vers la page de confirmation avec l'ID de l'événement
        return redirect()->route('confirmeTicketId', ['id' => $request->eventId]);
    }

    public function showpConfirmation($id)
    {
        $event = Event::join('users', 'events.user_id', '=', 'users.id')
                      ->select('events.*', 'users.firstName', 'users.lastName')
                      ->find($id);
        return view('client.confirmeTicket', ['event' => $event]);
    }

    public function showpticktfinale($id)
    {
        $event = Event::join('users', 'events.user_id', '=', 'users.id')
                      ->select('events.*', 'users.firstName', 'users.lastName')
                      ->find($id);
        return view('client.tickt_finale', ['event' => $event, 'codeQR' => Session::get('codeQR')]);
    }
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Session;

class EventController extends Controller
{
    public function store(Request $request)
    {

                // Validate the request data
        $validatedData = $request->validate([
            'eventName' => 'required|string|max:255',
            'eventDate' => 'required|date',
            'eventCategory' => 'required|string|max:255',
            'eventTime' => 'required',
            'eventDuration' => 'required',
            'eventDescription' => 'required|string',
            'eventVenue' => 'required|string|max:255',
            'eventAddress' => 'required|string|max:255',
            'eventCountry' => 'required|string|max:255',
            'eventState' => 'required|string|max:255',
            'eventCity' => 'required|string|max:255',
            'eventZip' => 'required|string|max:20',
            'ticket.name' => 'required|string|max:255',
            'ticket.total' => 'required|integer',
            'ticket.price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the file upload if exists
        $imageName = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
        } else {
            if ($request->hasFile('image')) {
                return redirect()->back()->withErrors(['image' => 'Invalid or missing image file'])->withInput();
            }
        }
       
        $id= Session::get('id');

        // Insert event data into the database
        DB::table('events')->insert([
            'event_name' => $validatedData['eventName'],
            'date' => $validatedData['eventDate'],
            'category' => $validatedData['eventCategory'],
            'time' => $validatedData['eventTime'],
            'duration' => $validatedData['eventDuration'],
            'description' => $validatedData['eventDescription'],
            'venue' => $validatedData['eventVenue'],
            'address' => $validatedData['eventAddress'],
            'country' => $validatedData['eventCountry'],
            'state' => $validatedData['eventState'],
            'city' => $validatedData['eventCity'],
            'zip' => $validatedData['eventZip'],
            'ticket_name' => $validatedData['ticket']['name'],
            'total_ticket' => $validatedData['ticket']['total'],
            'price' => $validatedData['ticket']['price'],
            'user_id' => $id,
            'image' => $imageName,
        ]);

        return response()->json(['success' => true]);
    }
}
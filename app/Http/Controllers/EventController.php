<?php
namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

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
       
        $id = Session::get('id');

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
    public function EventGetData(int $id)
    {
        $event = Event::findOrFail($id);
        //return $event;
        return view('admin.eventsUpdate', compact('event'));
    }
    public function EventUpdateData(Request $request, int $id)
    {
        $image = $request->input('image');
        $event_name = $request->input('title');
        $ticket_name = $request->input('ticketname');
        $price = $request->input('ticketprice');
        $total_ticket = $request->input('tickettotal');
        $category = $request->input('category');
        $date = $request->input('eventdate');
        $time = $request->input('eventtime');
        $duration = $request->input('duration');
        $description = $request->input('description');
        $venue = $request->input('venue');
        $address = $request->input('address');
        $country = $request->input('country');
        $state = $request->input('state');
        $city = $request->input('city');
        $zipCode = $request->input('zipcode');

        // Find the event by ID
        $event = Event::findOrFail($id);

        // Handle file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'assets/images/Upload-imgs/Events/';
            $file->move($path, $filename);

            // Delete old image if exists
            if (File::exists($path . $event->image)) {
                File::delete($path . $event->image);
            }

            $image = $filename;
        } else {
            $image = $event->image;
        }
        

        // Update the event with validated data
        $event->update([
            'image' => $image,
            'event_name' =>  $event_name,
            'ticket_name' =>  $ticket_name,
            'price' =>  $price,
            'total_ticket' =>  $total_ticket,
            'category' =>  $category,
            'date' =>  $date,
            'time' =>  $time,
            'duration' =>  $duration,
            'description' =>  $description,
            'venue' =>  $venue,
            'address' =>  $address,
            'country' =>  $country,
            'state' =>  $state,
            'city' => $city,
            'zipCode' => $zipCode,
        ]);

        // Redirect with a success message
        return redirect()->route('events')->with('success', 'Updated Events successful!');
    }
    public function EventDestroyData(int $id)
    {
        $eventdel = Event::findOrFail($id);

        if(File::exists($eventdel->image))
        {
            File::exists($eventdel->image);
        }

        $eventdel->delete();
        return redirect()->route('events')->with('success', 'Events has been deleted!');
    }
}
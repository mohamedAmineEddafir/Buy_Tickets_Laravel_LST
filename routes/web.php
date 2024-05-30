<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AchatController;
use Illuminate\Support\Facades\Session;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/*----------------------------------------------------Client--------------------------------------------*/

            
Route::get('/', function () {
    return view('client.index');
})->name('client.index');

Route::get('/explore_events', function () {
    $events =DB::table('events')->get();
    return view('client.explore_events', ['events' => $events]);
});

Route::get('/online_event_detail_view', function () {
    return view('client.online_event_detail_view');
});

Route::get('/venue_event_detail_view', function () {
    return view('client.venue_event_detail_view');
});

 Route::get('/contact_us', function () {
    return view('client.contact_us');
});

Route::get('/sign_up', function () {
    return view('client.sign_up');
});

Route::get('/sign_in', function () {
     return view('client.sign_in');
})->name('login');

Route::get('/forgot_password', function () {
    return view('client.forgot_password');
});
        
Route::get('/about_us', function () {
    return view('client.about_us');
});

Route::get('/create_event', function () {
    if(Session::get('email') === null) {
        return redirect()->route('login');
    }
    return view('client.create_event');
});
Route::get('/achat', function () {
    return view('client.achat');
});
    
            


Route::post('/sign_up', [RegisterController::class, 'register'])->name('register');
Route::post('/sign_in', [LoginController::class, 'login'])->name('login.submit');
Route::post('/Logout', [LogoutController::class, 'logout'])->name('logout');

Route::post('/create_event', [EventController::class, 'store'])->name('create_event');

Route::post('/achat', [AchatController::class, 'achat'])->name('achat.achat');
Route::get('/confirmeTicket', [AchatController::class, 'confirmeTicket'])->name('confirmeTicket');





/*----------------------------------------------------Admin--------------------------------------------*/
                
            
Route::get('/dashbord', function () {
    if(Session::get('email') === null) {
        return redirect()->route('login');
    }
    return view('admin.dashbord');
 });

Route::get('/events', function () {
    if(Session::get('email') === null) {
        return redirect()->route('login');
    }
    return view('admin.events');
});
/*+++++++++++++++++++++++++++++++++++++++++++++++++++/ Events Start /+++++++++++++++++++++++++++++++++++++++++++++++++*/

 // get data with url withOut controller
 Route::get('/events', function (Request $request) {
        $search = $request->input('search');

        // Si un terme de recherche est présent filtrer les résultats
        if ($search) {
            $events = DB::table('events')
                ->where('title', 'LIKE', '%' . $search . '%')
                ->get();
        } else {
            // Sinon, récupérer tous les événements
            $events = DB::table('events')->get();
        }
    $eventCount = $events->count(); // Compter le nombre d'événements

    return view('admin.events', ['events' => $events, 'eventCount' => $eventCount, 'search' => $search]);
})->name('events');

Route::get('events/{id}/modify-Events', [EventController::class, 'EventGetData'])->name('events.modify');
Route::put('events/{id}/modify-Events', [EventController::class, 'EventUpdateData'])->name('events.update');
Route::get('events/{id}/delete-Events', [EventController::class, 'EventDestroyData'])->name('events.destroy');


/*+++++++++++++++++++++++++++++++++++++++++++++++++++/ End Events /+++++++++++++++++++++++++++++++++++++++++++++++++*/

Route::get('/modify-Events', function () {
    if(Session::get('email') === null) {
        return redirect()->route('login');
    }
    return view('admin.eventsUpdate');
});

Route::get('/demande', function () {
    if(Session::get('email') === null) {
        return redirect()->route('login');
    }
     return view('admin.demande');
});

Route::get('/my_teams', function () {
    if(Session::get('email') === null) {
        return redirect()->route('login');
    }
    return view('admin.my_teams');
});
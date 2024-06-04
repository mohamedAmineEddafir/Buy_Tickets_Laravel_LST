<?php

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AchatController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Auth\LoginnController;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD

=======
>>>>>>> ad6d546b83ce4ac6f68244fd844c29e724a9a775




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
    $events =DB::table('events')->paginate(12)->withQueryString();
    return view('client.index', ['events' => $events]);
})->name('client.index');

Route::get('/explore_events', function () {
    $events =DB::table('events')->paginate(12)->withQueryString();
    return view('client.explore_events', ['events' => $events]);
})->name('explore_events');

Route::get('/explore_events/{Category}', function ($Category) {
    $events =DB::table('events')->where(['category' => $Category])->paginate(12)->withQueryString();
    return view('client.explore_events', ['events' => $events]);
})->name('events.filter');

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
Route::get('/tickt_finale', function () {
    return view('client.tickt_finale');
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
    


Route::get('auth/google', [LoginnController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginnController::class, 'handleGoogleCallback']);


        
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::post('/sign_in', [LoginController::class, 'login'])->name('login.submit');

Route::post('/Logout', [LogoutController::class, 'logout'])->name('logout');

Route::post('/create_event', [EventController::class, 'store'])->name('create_event');

Route::post('/achat', [AchatController::class, 'achat'])->name('achat.achat');

Route::get('/confirmeTicket', [AchatController::class, 'confirmeTicket'])->name('confirmeTicket');

Route::get('/venue_event_detail_view/{id}', [EventController::class, 'showEvente'])->name('venue_event_detail_view.show');

Route::get('/achat/{id}', [EventController::class, 'showprice'])->name('achat.show');
Route::get('/confirmeTicket/{id}', [AchatController::class, 'showpConfirmation'])->name('confirmeTicket.show');
Route::get('/tickt_finale/{id}', [AchatController::class, 'showpticktfinale'])->name('tickt_finale.show');



/*----------------------------------------------------Admin--------------------------------------------*/   

/*
    & Basic Route to return dashboard 

Route::get('/dashbord', function () {
    if(Session::get('email') === null) {
        return redirect()->route('login');
    }
    return view('admin.dashbord');
});
*/

Route::get('/dashbord', [DashboardController::class, 'show'])->name('dashbord');

/*+++++++++++++++++++++++++++++++++++++++++++++++++++/ Events Start /+++++++++++++++++++++++++++++++++++++++++++++++++*/

 Route::get('/events', function (Request $request) {
    $search = $request->input('search');

    // Construire la requête de base avec jointure
    $query = DB::table('events')
        ->join('users', 'events.user_id', '=', 'users.id')
        ->select(
            'events.*',
            'users.firstName as user_firstName',
            'users.lastName as user_lastName',
            'users.email as user_email'
        );

    // Si un terme de recherche est présent, filtrer les résultats
    if ($search) {
        $query->where('events.title', 'LIKE', '%' . $search . '%');
    }

    // Exécuter la requête et obtenir les résultats
    $events = $query->get();
    $eventCount = $events->count(); // Compter le nombre d'événements

    return view('admin.events', ['events' => $events, 'eventCount' => $eventCount, 'search' => $search]);
})->name('events');

Route::get('events/{id}', [EventController::class, 'updateStatusEvents']) ->name('events.status');
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
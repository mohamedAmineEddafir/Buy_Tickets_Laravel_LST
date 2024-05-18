<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;



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
    return view('client.explore_events');
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
    return view('client.create_event');
});
    
            


Route::post('/sign_up', [RegisterController::class, 'register'])->name('register');
Route::post('/sign_in', [LoginController::class, 'login'])->name('login.submit');
Route::post('/Logout', [LogoutController::class, 'logout'])->name('logout');


/*----------------------------------------------------Admin--------------------------------------------*/
                
            
Route::get('/dashbord', function () {
    return view('admin.dashbord');
 });

Route::get('/events', function () {
     return view('admin.events');
});

Route::get('/my_teams', function () {
    return view('admin.my_teams');
});
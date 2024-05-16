<?php

use Illuminate\Support\Facades\Route;

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
});

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
});

Route::get('/forgot_password', function () {
    return view('client.forgot_password');
});
        
Route::get('/about_us', function () {
    return view('client.about_us');
});
            
            
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
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientControlle;
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

//ClientController

Route::get('/', [ClientControlle::class, 'index']);
Route::get('/explore_events', [ClientControlle::class, 'exploreEvents']);
Route::get('/online_event_detail_view', [ClientControlle::class, 'onlineEventDetailView']);
Route::get('/venue_event_detail_view', [ClientControlle::class, 'venueEventDetailView']);
Route::get('/contact_us', [ClientControlle::class, 'contactUs']);
Route::get('/sign_up', [ClientControlle::class, 'signUp']);
Route::get('/sign_in', [ClientControlle::class, 'signIn']);
Route::get('/forgot_password', [ClientControlle::class, 'forgotPassword']);
Route::get('/about_us', [ClientControlle::class, 'aboutUs']);

Route::post('/createaccount',[ClientControlle::class,'createaccount']);


// AdminControlller/////////////////////////
Route::get('/dashbord',[AdminController::class,'dashbord']);
Route::get('/events',[AdminController::class,'events']);
Route::get('/my_teams',[AdminController::class,'my_teams']);


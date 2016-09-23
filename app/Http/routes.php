<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'pages_controller@get_index');
Route::get('/about', 'pages_controller@get_about');
Route::get('/events', 'pages_controller@get_event');
Route::get('/volunteer', 'pages_controller@get_volunteer');

Route::post('/contact', 'Contact_controller@store');
Route::post('/register', 'Registration_controller@store');

Route::get('/test', function () {
    // $usert = App\Contact_us::find(1);
    // echo $usert->name;
    return App\Contact_us::all();
});
































//

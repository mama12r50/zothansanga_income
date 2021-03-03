<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ForwarderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});
Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/form', function () {
    return view('form');
});
Route::get('/important', function () {
    return view('registration');
});

Route::post('/form', [FormController::class, 'index']);

Route::get('/submitted', function () {
    return view('csc_submitted');
});
Route::get('/frejected', function () {
    return view('forwarder_rejected');
});
Route::get('/corejected', function () {
    return view('co_rejected');
});
Route::get('/forwarded', function () {
    return view('forwarder_forwarded');
});
Route::get('/issued', function () {
    return view('co_issued');
});
Route::get('/acknowledgement', function () {
    return view('acknowledgement');
});
Route::get('/certificate', function () {
    return view('certificate');
});
Route::get('/forejected', function () {
    return view('fo_rejected');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/forwarder', [ForwarderController::class, 'index']);
// Route::get('Forwarder', [ForwarderController::class, 'getData']);
// Route::get('{id', [FormController::class, 'getData']);
Route::post('/forwarder/{id}/check', [ForwarderController::class, 'forwarder_check']);
Route::post('/circleofficer/{id}/check', [ForwarderController::class, 'circle_officer_check']);
Route::post('/fieldofficer/{id}/check', [ForwarderController::class, 'field_officer_check']);


Route::get('/acknowledgement', [ForwarderController::class, 'acknowledgement']);

//For Fowarder
Route::get('/forwarder', [ForwarderController::class, 'forwarder_function']);
Route::get('submitted/{id}', [ForwarderController::class, 'submitted_function']);

//For Circle Officer
Route::get('/circleofficer', [ForwarderController::class, 'circleofficer_function']);
Route::get('forwarded/{id}', [ForwarderController::class, 'forwarded_application']);

//For Field Officer
Route::get('/fieldofficer', [ForwarderController::class, 'fieldofficer_function']);
Route::get('issued/{id}', [ForwarderController::class, 'issued_application']);

Route::get('/search', [ForwarderController::class, 'search']);
<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Add routing
// === Option 1 ===
// Route::resource('contacts', 'app/Http/Controllers/ContactController'); // maybe WRONG
Route::resource('contacts', 'App\Http\Controllers\ContactController');

// === Option 2 ===
// Route::resource('contacts', ContactController::class);

// === Option 3 ===
// Note: If you want to create a controller that will only expose a RESTful API, 
// you can use the apiResource method to exclude the routes that are used to serve the HTML templates:

// Route::apiResource('contacts', 'ContactController');

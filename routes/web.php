<?php

use App\Models\Message;
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

/*
First argument defines the URI
*/
Route::get('/', function () {
    return view('welcome'); 
});

/*
Second argument is data parameters
*/
Route::get('/hello', function () {
    return view('hello' , ['name' => 'Daniel']); 
});

Route::get('/message', function () {
    return view('message', ['message' => new Message('Welcome to Folksbook!')]);
});

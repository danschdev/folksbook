<?php

use App\Http\Controllers\MessageController;
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

Route::get('/hello', function () {
    return view('hello' , ['name' => 'Daniel']); 
});

Route::get('/message', function () {
    return view('message', ['message' => new Message('Welcome to Folksbook!')]);
});

Route::get('/portal', function () {
    $messages = [
        new Message('Welcome to Folksbook!'),
        new Message('Meet your friends and connect with new people')
    ];
    return view('portal', ['messages' => $messages]);
});

<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\View\View;

class MessageController extends Controller
{
    public function show(Message $message): View
    {
        return view('message', ['message' => $message]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotController extends Controller
{
    public function send_message(Request $request)
    {
        echo 'Enviando mensagens...';
    }
}

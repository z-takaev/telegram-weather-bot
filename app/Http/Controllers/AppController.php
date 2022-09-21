<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class AppController extends Controller
{
    public function app() {
        Telegram::bot()->sendMessage([
            'chat_id' => '@weather_vld',
            'text' => view('templates.weather_post')->render(),
            'parse_mode' => 'HTML',
        ]);
    }
}

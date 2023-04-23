<?php

namespace App\Http\Controllers\Pins;

use App\Http\Controllers\Controller;
use App\Models\Pin;

class PinController extends Controller
{
    public function index()
    {
        // TODO добавать в шаблон отображение послендних заметок в формате:
        // Заголовок + краткое содержание самой заметки
        //

        $pins = Pin::all();
        return view('pins.list', compact('pins'));
    }
}

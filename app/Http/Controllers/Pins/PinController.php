<?php

namespace App\Http\Controllers\Pins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pin\PinRequest;
use App\Models\Flag;
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

    public function create()
    {
        $flags=Flag::all();
        return view('pins.create', compact('flags'));
    }

    public function store(PinRequest $request)
    {
        Pin::create([
            'title' => $request->title,
            'text' => $request->text,
            'flag_id' => $request->flag_id,
        ]);
        return redirect()->route('pins.index');
    }
}

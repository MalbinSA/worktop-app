<?php

namespace App\Http\Controllers\Pins;

use App\Http\Controllers\Controller;
use App\Models\Wish;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index()
    {
        $wishes = Wish::all();

        return view('pins.wishes.index', compact('wishes'));

    }
}

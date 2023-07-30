<?php

namespace App\Http\Controllers\Pins;

use App\Http\Controllers\Controller;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishController extends Controller
{
    public function index(Request $request)
    {
        $currentUser = $request->user();
        $wishes = Wish::where('user_id', $currentUser->id)->get();

        return view('pins.wishes.index', compact('wishes'));

    }
}

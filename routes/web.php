<?php

use App\Http\Controllers\Pins\PinController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('laravel');

Route::get('/plan', function () {
    return view('plan');
});

Route::get('/pins', [PinController::class, 'index'])->name('pins.index');
Route::get('/pins/create', [PinController::class, 'create'])->name('pins.create');
Route::post('/pins', [PinController::class, 'store'])->name('pins.store');

// Laravel Breeze +

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Laravel Breeze -

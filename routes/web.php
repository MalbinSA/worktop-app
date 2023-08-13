<?php

use App\Http\Controllers\Finance\FinanceController;
use App\Http\Controllers\Pins\WishController;
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

Route::prefix('finance')->group(function () {
    Route::get('/', [FinanceController::class, 'index'])->name('finance.index');
});

// All pins
Route::prefix('pins')->group(function () {
    Route::get('/', [PinController::class, 'index'])->name('pins.index');
    Route::post('/', [PinController::class, 'store'])->name('pins.store');
    Route::get('/create', [PinController::class, 'create'])->name('pins.create');
    Route::get('/{pin_id}', [PinController::class, 'show'])->name('pins.show');
});

// Wish list
Route::prefix('wishes')->group(function () {
    Route::get('/', [WishController::class, 'index'])->name('wishes.index');
});

// Laravel Breeze +

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Laravel Breeze -

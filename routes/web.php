<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HouseController::class, 'index'])->name('home');
Route::resource('houses', HouseController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EstimationController;
use App\Http\Controllers\ImmobilierController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HouseController::class, 'index'])->name('home');
Route::resource('houses', HouseController::class);
Route::get('/pages.about', [AboutController::class, 'index']);
Route::get('/pages.estimation', [EstimationController::class, 'index']);
Route::get('/pages.immobilier', [ImmobilierController::class, 'index']);
Route::get('/pages.contact', [ContactController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;

Route::get('/', [ChirpController::class, 'index']);

Route::middleware('auth')->group(
    fn() =>
    Route::resource('chirps', ChirpController::class)
        ->only(['store', 'edit', 'update', 'destroy'])
);


// Registration routes
Route::view('/register', 'auth.register')
    ->middleware('guest')
    ->name('register');

Route::post('/register', Register::class)
    ->middleware('guest');

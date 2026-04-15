<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::get('home', [ChirpController::class, 'index']);
Route::post('/chirps', [ChirpController::class, 'store']);

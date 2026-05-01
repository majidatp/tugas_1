<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\NamaController;
Route::get('/', [NamaController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
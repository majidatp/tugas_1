<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\NamaController;


Route::get('/', [NamaController::class, 'index'])->name('home');


Route::get('/user', [UserController::class, 'index'])->name('user');
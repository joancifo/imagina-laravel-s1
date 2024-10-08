<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bienvenido');
});

Route::get('/users', [UserController::class, 'index']);

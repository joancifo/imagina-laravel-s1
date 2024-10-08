<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bienvenido');
});

Route::get('/users/test', [UserController::class, 'test']);
Route::resource('users', UserController::class);

Route::group(['prefix' => 'category', 'middleware' => [\App\Http\Middleware\EnsureHasSession::class]], function () {
    Route::get('/{categoria}/{page}', function (string $categoria, string $page) {

        dd($categoria, $page);
    })->name('categoria.detail-page');
});




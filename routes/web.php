<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = \App\Models\Product::all();

    $firstProduct = $products->first();


    return view('bienvenido', [
        'products' => $products,
        'categories' => \App\Models\Category::all(),
        'firstProduct' => $firstProduct
    ]);
});

Route::resource('users', UserController::class);

Route::group(['prefix' => 'category', 'middleware' => [\App\Http\Middleware\EnsureHasSession::class]], function () {
    Route::get('/{categoria}/{page}', function (string $categoria, string $page) {

        dd($categoria, $page);
    })->name('categoria.detail-page');
});




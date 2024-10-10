<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = \App\Models\Product::query()
        ->with('category')
        ->get();


    return view('bienvenido', [
        'products' => $products,
        'categories' => \App\Models\Category::all(),
    ]);
});

//Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index']);
Route::resource('products', \App\Http\Controllers\ProductController::class);
Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('users', UserController::class);

Route::get('product-list', function(){
    return \App\Models\Product::all();
});

Route::group(['prefix' => 'category', 'middleware' => [\App\Http\Middleware\EnsureHasSession::class]], function () {
    Route::get('/{categoria}/{page}', function (string $categoria, string $page) {

        dd($categoria, $page);
    })->name('categoria.detail-page');
});




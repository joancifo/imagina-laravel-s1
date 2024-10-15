<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard', ['planes' => \App\Models\Plane::all()])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('dashboard/top-planes', \App\Livewire\TopPlanes::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard.top-planes')
;

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('products', \App\Http\Controllers\ProductController::class);

require __DIR__.'/auth.php';

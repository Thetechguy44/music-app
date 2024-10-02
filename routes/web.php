<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware(['auth', 'user_role:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Route::prefix('dashboard')->name('dashboard.')->middleware(['auth','user_role:admin|artist'])->group(function(){
    Route::get('/home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');
});
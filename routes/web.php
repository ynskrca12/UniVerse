<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversiteController;


Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/universite',[UniversiteController::class, 'index']);
Route::get('/universite_detay/{id}', [UniversiteController::class, 'universite_detay'])->name('universite_detay');


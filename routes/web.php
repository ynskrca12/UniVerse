<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\DuyuruController;
use App\Http\Controllers\IlanController;

Route::get('/', function () {
    return view('layouts.master');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('auth.register');
// });

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerPost',[AuthController::class, 'registerPost'])->name('registerPost');

Route::get('/login',[AuthController::class, 'login'])->name('login');
 Route::post('/login',[AuthController::class, 'loginPost'])->name('loginPost');

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');


Route::get('/home', function () {
    return view('home');
});

Route::get('/universite',[UniversiteController::class, 'index']);
Route::get('/universite_detay/{id}', [UniversiteController::class, 'universite_detay'])->name('universite_detay');

Route::get('/duyurular',[DuyuruController::class,'index']);

Route::get('/ilanlar',[IlanController::class,'index']);

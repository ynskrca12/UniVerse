<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeleteCommentController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\DuyuruController;
use App\Http\Controllers\IlanController;
use App\Http\Controllers\StoreCommentController;

Route::get('/', function () {
    return view('layouts.master');
});

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

Route::post('/universite/{id}/yorumlar',[StoreCommentController::class,'universite_yorum_ekle'])->name('universite_yorum_ekle');
Route::delete('/universite/{id}/yorumlar/{comment}',[DeleteCommentController::class,'universite_yorum_sil'])->name('universite_yorum_sil');






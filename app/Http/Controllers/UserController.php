<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function kullanici_bilgileri()
    {
        if (Auth::check()) {
            $user = Auth::user();

            // print_r($user->name);die;

            return view("user.kullanici_bilgileri", compact('user'));
        } else {
            return redirect('/login')->with('message', 'Lütfen giriş yapınız.');
        }
    }
}

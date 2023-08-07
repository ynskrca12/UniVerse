<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ilan;
use Illuminate\Http\Request;

class IlanController extends Controller
{
    public function index(){

        $ilanlar = Ilan::all();

        return view('ilan.ilanlar',compact('ilanlar'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniversiteController extends Controller
{
    public function index(){

        $universiteler = DB::table('universiteler')->get();
        return view('universite.universite',compact('universiteler'));
    }


    public function universite_detay($id)
    {
       
         $universite = DB::table('universiteler')->where('id',$id)->first();

        return view('universite.universite_detay',compact('universite')); 
    }
}

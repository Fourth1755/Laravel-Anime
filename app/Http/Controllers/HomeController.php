<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $anime="Sword Art Online";
        $anime2="Fullmetal Alchemist: Brotherhood";
        //return view('home',['anime'=>$anime]);
        return view('home',compact('anime','anime2'));
    }
}

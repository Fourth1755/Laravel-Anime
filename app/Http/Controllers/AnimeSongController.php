<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AnimeSongController extends Controller
{
    function index(){
        return view('animesong.indexAnimeSong');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeStudioController extends Controller
{
    function index(){
        return view('animestudio.indexAnimeStudio');
    }
}

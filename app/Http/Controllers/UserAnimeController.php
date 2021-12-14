<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAnimeController extends Controller
{
    function index(){
        return view('useranime.indexUserAnime');
    }
}
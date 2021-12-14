<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use Illuminate\Support\Facades\DB;

class AnimeController extends Controller
{
    function index(){
        $anime=DB::table('anime')->get();
        return view('anime.indexAnime',compact('anime'));
    }
    
}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnimeStudioController;
use App\Http\Controllers\AnimeSongController;
use App\Http\Controllers\UserAnimeController;
use App\Http\Controllers\AdminController;

use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[HomeController::class,'index']);

Route::get('/about',[AboutController::class,'index']);

Route::get('/anime/index',[AnimeController::class,'index']);

Route::get('/studio/index',[AnimeStudioController::class,'index']);

Route::get('/animesong/index',[AnimeSongController::class,'index']);

Route::get('/useranime/index',[UserAnimeController::class,'index']);

Route::get('/admin/index',[AdminController::class,'index'])->middleware('check');

Route::get('/user/{name}',function($name){
    echo "<h1>Hello  $name Plai</h1>";
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users=User::all();
    return view('dashboard',compact('users'));
})->name('dashboard');

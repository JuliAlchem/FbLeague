<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TeamController;

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
Route::get('/', function(){ 
    return view('welcome');
});
/*Route::get('/', [PlayerController::class, 'index'])->name('players.index'); */
 /*Route::get('/', [GameController::class, 'index'])->name('games.index'); */


Route::resource('players','App\Http\Controllers\PlayerController');
Route::resource('teams','App\Http\Controllers\TeamController');
Route::resource('games','App\Http\Controllers\GameController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* new login/register/dash 
Route::get('/', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

*/
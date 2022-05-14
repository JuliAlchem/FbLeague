<?php

use App\Http\Controllers\Admin\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\TeamController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('players',PlayerController::class)->names('admin.players'); 
Route::resource('teams',TeamController::class)->names('admin.teams');
Route::resource('games',GameController::class)->names('admin.games');
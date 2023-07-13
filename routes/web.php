<?php

use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// nampilin dashboard admin
Route::get('/', [dashboard_controller::class, 'index']);

//nampilin user
Route::get('/user', [user_controller::class, 'index']);

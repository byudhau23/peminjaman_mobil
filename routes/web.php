<?php

use App\Http\Controllers\car_controller;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\BookingController;
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

// Menampilkan Dashboard Admin
Route::get('/', [dashboard_controller::class, 'index']);

// Mobil
// nampilin halaman mobil
Route::get('/car', [car_controller::class, 'index']);

// Menampilkan Daftar Booking
Route::get('/bookings', [BookingController::class, 'index']);

<?php

use App\Http\Controllers\car_controller;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
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

// Menampilkan Login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Menampilkan Dashboard Admin
Route::get('/', [dashboard_controller::class, 'index']);

// Mobil
// Menampilkan halaman mobil
Route::get('/car', [car_controller::class, 'index']);

// Menampilkan Daftar Booking
Route::get('/bookings', [BookingController::class, 'index']);

// Menampilkan Form Tambah Booking
Route::get('/bookings/create', [BookingController::class, 'create']);

// Proses Tambah Booking
Route::post('bookings', [BookingController::class, 'store']);

// Menampilkan Form Edit Booking
Route::get('/bookings/edit/{id}', [BookingController::class, 'edit']);

// Proses Edit Booking
Route::put('/bookings/{id}', [BookingController::class, 'update']);

// Route untuk delete Booking
Route::delete('/bookings', [BookingController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
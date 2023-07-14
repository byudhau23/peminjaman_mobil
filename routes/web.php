<?php

use App\Http\Controllers\car_controller;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\user_controller;
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

//nampilin user
Route::get('/user', [user_controller::class, 'index']);

//Nampillin form tambah user
Route::get('/user/create', [user_controller::class, 'create']);

//Nampillin proses tambah user
Route::post('/user', [user_controller::class, 'store']);

//Nampillin form edit user
Route::get('/user/edit/{id}', [user_controller::class,  'edit']);

//Nampillin proses edit user
Route::put('/user/{id}', [user_controller::class, 'update']);

//Menghapus data user
Route::delete('/user', [user_controller::class, 'destroy']);

// nampilin halaman mobil
Route::get('/car', [car_controller::class, 'index']);

// nampilin form tambah mobil
Route::get('/car/create', [car_controller::class, 'create']);

// proses tambah mobil
Route::post('/car', [car_controller::class, 'store']);

// nampilin form edit mobil
Route::get('/car/edit/{id}', [car_controller::class, 'edit']);

// proses edit mobil
Route::put('/car/{id}', [car_controller::class, 'update']);

// delete mobil
Route::delete('/car', [car_controller::class, 'destroy']);

// Menampilkan Daftar Booking
Route::get('/bookings', [BookingController::class, 'index']);
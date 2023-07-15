<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\car_controller;
use App\Http\Controllers\dashboard_controller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\user_controller;
use illuminate\Support\Facades\Auth;
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
Route::get('/main', [dashboard_controller::class, 'index'])->middleware('auth');

// Menampilkan Landingpage
Route::get('/', function(){
    return view('welcome');
});

// Nampilkan halaman user
Route::get('/user', [user_controller::class, 'index'])->middleware('auth');

//Nampillin form tambah user
Route::get('/user/create', [user_controller::class, 'create'])->middleware('auth');

//Nampillin tambah user
Route::post('/user', [user_controller::class, 'store'])->middleware('auth');

//Nampillin form edit user
Route::get('/user/edit/{id}', [user_controller::class, 'edit'])->middleware('auth');

//Nampillin edit user
Route::put('/user/{id}', [user_controller::class, 'update'])->middleware('auth');

//Nampillin delete user
Route::delete('/user', [user_controller::class, 'destroy'])->middleware('auth');

// nampilin halaman mobil
Route::get('/car', [car_controller::class, 'index'])->middleware('auth');

// nampilin form tambah mobil
Route::get('/car/create', [car_controller::class, 'create'])->middleware('auth');

// proses tambah mobil
Route::post('/car', [car_controller::class, 'store'])->middleware('auth');

// nampilin form edit mobil
Route::get('/car/edit/{id}', [car_controller::class, 'edit'])->middleware('auth');

// proses edit mobil
Route::put('/car/{id}', [car_controller::class, 'update'])->middleware('auth');

// delete mobil
Route::delete('/car', [car_controller::class, 'destroy'])->middleware('auth');

// Menampilkan Daftar Booking
Route::get('/bookings', [BookingController::class, 'index'])->middleware('auth');

// Menampilkan Form Tambah Booking
Route::get('/bookings/create', [BookingController::class, 'create'])->middleware('auth');

// Proses Tambah Booking
Route::post('bookings', [BookingController::class, 'store'])->middleware('auth');

// Menampilkan Form Edit Booking
Route::get('/bookings/edit/{id}', [BookingController::class, 'edit'])->middleware('auth');

// Proses Edit Booking
Route::put('/bookings/{id}', [BookingController::class, 'update'])->middleware('auth');

// Route untuk delete Booking
Route::delete('/bookings', [BookingController::class, 'destroy'])->middleware('auth');

// Route Autentikasi
Auth::routes();

// route logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Auth::logout();
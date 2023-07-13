<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class car_controller extends Controller
{
    // menampilkan smua mobil
    public function index()
    {
        $cars = Car::all();
        return view('admin.car.index', [
            'cars' => $cars
        ]);
    }
}

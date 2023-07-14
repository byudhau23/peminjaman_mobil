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

    public function create()
    {
        return view('admin.car.create');
    }

    public function store(Request $request)
    {
        // melakukan validasi data
        $request->validate([
            'brand' => 'required | string',
            'type' => 'required | string',
            'year' => 'required | integer',
            'price' => 'required | integer'
        ]);
        // insert data ke table mobil
         car::create([
            //field di table 
            'brand' => $request->brand,
            'type' => $request->type,
            'year' => $request->year,
            'price' => $request->price
         ]);

         return redirect('/car');
    }

    public function edit($id){
        // mendapatkan mobil berdasarkan id
        $car = Car::find($id);

        return view('admin.car.edit', [
            'car' => $car
        ]);
    }

    // method untuk update mobil
    public function update($id, Request $request){
        // melakukan validasi data
        $validatedData = $request->validate([
            'brand' => 'required',
            'type' => 'required',
            'year' => 'required | numeric',
            'price' => 'required'
        ]);

        // cari mobil yang akan di update
        $car = Car::find($id);

        // update mobil berdasarkan data validasi
        $car->update($validatedData);

        // kembalikan ke halaman  daftar mobil
        return redirect('/car')->with('success', 'Data mobil berhasil diubah.');
    }

    // method untuk delete pasine
    public function destroy(Request $request){
        Car::destroy($request->id);

        // kembalikan ke halaman daftar pasien
        return redirect('/car')->with('success', 'Data pasien berhasil dihapus.');
    }
}

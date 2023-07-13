<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::All();
        return view('admin.bookings.index', [
            'booking' => $bookings
        ]);
    }

    public function create(){
        return view('admin.bookings.create');
    }
    public function store(Request $request){
        $request->validate([
            'user_id' => 'required',
            'cars_id' => 'required',
            'booking_time' => 'required',
            'return_time' => 'required',
            ]);
    
            Booking::create([
            // Field dari 'table' => Nilai yg ingin diisi
            'user_id' => $request->user_id,
            'cars_id' => $request->cars_id,
            'booking_time' => $request->booking_time,
            'return_time' => $request->return_time
            ]);
            
            return redirect('/bookings');
    }
}
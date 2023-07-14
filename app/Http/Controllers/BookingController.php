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
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'date' => 'required|date',
            'service' => 'required|string',
        ]);

        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'date' => $request->date,
            'service' => $request->service,
        ]);

        return redirect('/booking')->with('success', 'Appointment booked successfully!');
    }
}

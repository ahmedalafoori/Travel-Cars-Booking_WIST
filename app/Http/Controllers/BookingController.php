<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function book(Car $car)
    {
        return view('booking.create', compact('car'));
    }
    public function store(Request $request, Car $car)
    {
        $validated = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $start_date = Carbon::parse($validated['start_date']);
        $end_date = Carbon::parse($validated['end_date']);
        $days = $end_date->diffInDays($start_date) + 1; // Adding 1 to include both start and end days

        $total_price = $car->price_per_day * $days;

        $booking = $car->bookings()->create([
            'user_id' => auth()->id(),
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'total_price' => $total_price,
            'status' => 'Confirmed',
        ]);
        $payment = Payment::create([
            'booking_id' => $booking->id,
            'amount' => $total_price,
            'payment_method' => $request->payment_method,
            'payment_status' => 'Successful'
        ]);
        return redirect()->route('review.create', $car)->with('success', 'Booking successful! Please leave a review.');

    }}



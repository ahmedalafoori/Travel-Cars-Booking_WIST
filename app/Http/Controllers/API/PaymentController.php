<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return Payment::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'booking_id' => 'required|exists:bookings,id',
            'amount' => 'required|numeric',
            'payment_method' => 'required|string',
            'payment_status' => 'required|string',
        ]);

        $payment = Payment::create($validated);
        return response()->json($payment, 201);
    }

    public function show(Payment $payment)
    {
        return $payment;
    }

    public function update(Request $request, Payment $payment)
    {
        $validated = $request->validate([
            'amount' => 'numeric',
            'payment_method' => 'string',
            'payment_status' => 'string',
        ]);

        $payment->update($validated);
        return response()->json($payment, 200);
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();
        return response()->json(null, 204);
    }
}

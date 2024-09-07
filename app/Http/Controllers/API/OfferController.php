<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        return Offer::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'car_id' => 'required|exists:cars,id',
            'discount_percentage' => 'required|numeric|min:0|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $offer = Offer::create($validated);
        return response()->json($offer, 201);
    }

    public function show(Offer $offer)
    {
        return $offer;
    }

    public function update(Request $request, Offer $offer)
    {
        $validated = $request->validate([
            'discount_percentage' => 'numeric|min:0|max:100',
            'start_date' => 'date',
            'end_date' => 'date|after:start_date',
        ]);

        $offer->update($validated);
        return response()->json($offer, 200);
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();
        return response()->json(null, 204);
    }
}

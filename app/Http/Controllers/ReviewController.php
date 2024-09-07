<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function create(Car $car)
{
    return view('reviews.create', compact('car'));
}
public function store(Request $request, Car $car)
{
    $validated = $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'review' => 'required|string',
    ]);

    $review = $car->reviews()->create([
        'user_id' => auth()->id(),
        'rating' => $validated['rating'],
        'review' => $validated['review'],
    ]);

    return redirect()->route('home')->with('success', 'Thank you for your review!');
}
}



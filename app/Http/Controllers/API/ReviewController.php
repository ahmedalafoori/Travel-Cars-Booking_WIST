<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return Review::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'car_id' => 'required|exists:cars,id',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);

        $review = Review::create($validated);
        return response()->json($review, 201);
    }

    public function show(Review $review)
    {
        return $review;
    }
}

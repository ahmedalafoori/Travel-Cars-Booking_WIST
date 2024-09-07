<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return Car::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'price_per_day' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
        ]);

        $car = Car::create($validated);
        return response()->json($car, 201);
    }

    public function show(Car $car)
    {
        return $car;
    }

    public function update(Request $request, Car $car)
    {
        $validated = $request->validate([
            'name' => 'string|max:255',
            'model' => 'string|max:255',
            'year' => 'integer',
            'price_per_day' => 'numeric',
            'category_id' => 'exists:categories,id',
            'description' => 'nullable|string',
        ]);

        $car->update($validated);
        return response()->json($car, 200);
    }

    public function destroy(Car $car)
    {
        $car->delete();
        return response()->json(null, 204);
    }
}

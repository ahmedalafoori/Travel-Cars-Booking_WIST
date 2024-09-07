<?php

namespace App\Http\Controllers;

use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        $recentCars = Car::latest()->take(6)->get();
        return view('index', compact('recentCars'));
    }
}


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\ReviewController;
use App\Http\Controllers\API\PaymentController;
use App\Http\Controllers\API\OfferController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\CarController;
use App\Http\Controllers\API\BookingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('users', UserController::class);
Route::apiResource('offers', OfferController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('cars', CarController::class);
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('reviews', ReviewController::class);
    Route::apiResource('payments', PaymentController::class);

    Route::apiResource('bookings', BookingController::class);
});

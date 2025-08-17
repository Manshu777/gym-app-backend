<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TrainerController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\TipController;
use App\Http\Controllers\Api\TipCommentController;
use App\Http\Controllers\Api\MessageController;



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // Trainer routes
    Route::get('/trainers', [TrainerController::class, 'index']);
    Route::get('/trainers/{id}', [TrainerController::class, 'show']);
    Route::put('/trainers/{id}', [TrainerController::class, 'update']);

    // Booking routes
    Route::get('/bookings', [BookingController::class, 'index']);
    Route::post('/bookings', [BookingController::class, 'store']);
    Route::put('/bookings/{id}', [BookingController::class, 'update']);

    // Tip routes
    Route::get('/tips', [TipController::class, 'index']);
    Route::post('/tips', [TipController::class, 'store']);
    Route::get('/tips/{id}', [TipController::class, 'show']);
    Route::put('/tips/{id}', [TipController::class, 'update']);
    Route::delete('/tips/{id}', [TipController::class, 'destroy']);

    // Tip Comment routes
    Route::post('/tip-comments', [TipCommentController::class, 'store']);

    // Message routes
    Route::get('/messages/{receiverId}', [MessageController::class, 'index']);
    Route::post('/messages', [MessageController::class, 'store']);
});
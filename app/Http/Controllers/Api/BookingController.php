<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller {
    public function index(Request $request) {
        $bookings = Booking::where('user_id', auth()->id())
            ->orWhere('trainer_id', auth()->id())
            ->with(['user', 'trainer'])
            ->get();

        return response()->json($bookings);
    }

    public function store(BookingRequest $request) {
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'trainer_id' => $request->trainer_id,
            'session_time' => $request->session_time,
            'status' => 'pending',
        ]);

        return response()->json($booking->load(['user', 'trainer']), 201);
    }

    public function update(Request $request, $id) {
        $booking = Booking::findOrFail($id);
        if (auth()->id() !== $booking->trainer_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $booking->update(['status' => $request->status]); // e.g., confirm, complete
        return response()->json($booking);
    }
}
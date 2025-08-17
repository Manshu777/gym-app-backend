<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainerProfileRequest;
use App\Models\User;
use App\Models\TrainerProfile;
use Illuminate\Http\Request;

class TrainerController extends Controller {
    public function index(Request $request) {
        $trainers = User::with('trainerProfile')
            ->where('role', 'trainer')
            ->when($request->city, fn($q) => $q->whereHas('trainerProfile', fn($qp) => $qp->where('city', $request->city)))
            ->when($request->name, fn($q) => $q->where('name', 'like', '%' . $request->name . '%'))
            ->get();

        return response()->json($trainers);
    }

    public function show($id) {
        $trainer = User::with('trainerProfile')->where('role', 'trainer')->findOrFail($id);
        return response()->json($trainer);
    }

    public function update(TrainerProfileRequest $request, $id) {
        $user = User::where('role', 'trainer')->findOrFail($id);
        if (auth()->id() !== $user->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $user->trainerProfile()->update($request->only([
            'dob',
            'address',
            'city',
            'about_me',
            'certifications',
            'awards',
        ]));

        return response()->json($user->load('trainerProfile'));
    }
}
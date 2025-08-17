<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipRequest;
use App\Models\Tip;
use Illuminate\Http\Request;

class TipController extends Controller {
    public function index() {
        $tips = Tip::with(['trainer', 'comments.user'])->get();
        return response()->json($tips);
    }

    public function store(TipRequest $request) {
        $tip = Tip::create([
            'trainer_id' => auth()->id(),
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return response()->json($tip->load('trainer'), 201);
    }

    public function show($id) {
        $tip = Tip::with(['trainer', 'comments.user'])->findOrFail($id);
        return response()->json($tip);
    }

    public function update(TipRequest $request, $id) {
        $tip = Tip::where('trainer_id', auth()->id())->findOrFail($id);
        $tip->update($request->only(['title', 'content']));
        return response()->json($tip);
    }

    public function destroy($id) {
        $tip = Tip::where('trainer_id', auth()->id())->findOrFail($id);
        $tip->delete();
        return response()->json(['message' => 'Tip deleted']);
    }
}
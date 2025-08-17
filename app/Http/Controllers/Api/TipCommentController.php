<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\TipCommentRequest;
use App\Models\TipComment;

class TipCommentController extends Controller {
    public function store(TipCommentRequest $request) {
        $comment = TipComment::create([
            'tip_id' => $request->tip_id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        return response()->json($comment->load('user'), 201);
    }
}
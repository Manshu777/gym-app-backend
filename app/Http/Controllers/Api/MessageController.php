<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller {
    public function index($receiverId) {
        $messages = Message::where(function ($q) use ($receiverId) {
            $q->where('sender_id', auth()->id())->where('receiver_id', $receiverId);
        })->orWhere(function ($q) use ($receiverId) {
            $q->where('sender_id', $receiverId)->where('receiver_id', auth()->id());
        })->with(['sender', 'receiver'])->orderBy('created_at')->get();

        return response()->json($messages);
    }

    public function store(MessageRequest $request) {
        $message = Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        return response()->json($message->load(['sender', 'receiver']), 201);
    }
}
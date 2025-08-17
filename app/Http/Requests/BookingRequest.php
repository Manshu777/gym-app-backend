<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
        public function authorize(): bool {
        return auth()->user()->role === 'user';
    }

    public function rules(): array {
        return [
            'trainer_id' => 'required|exists:users,id',
            'session_time' => 'required|date|after:now',
        ];
    }
}

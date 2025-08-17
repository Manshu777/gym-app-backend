<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainerProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return auth()->user()->role === 'trainer';
    }

    public function rules(): array {
        return [
            'dob' => 'required|date',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'about_me' => 'nullable|string',
            'certifications' => 'nullable|string',
            'awards' => 'nullable|string',
        ];
    }
}

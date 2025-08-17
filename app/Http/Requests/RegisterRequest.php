<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
   public function rules(): array {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'phone_number' => 'required|string|max:15',
            'password' => 'required|string|min:8',
            'role' => 'required|in:user,trainer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Max 2MB
            'dob' => 'required_if:role,trainer|date',
            'address' => 'required_if:role,trainer|string|max:255',
            'city' => 'required_if:role,trainer|string|max:100',
            'about_me' => 'nullable|string',
            'certifications' => 'nullable|string',
            'awards' => 'nullable|string',
        ];
    }
}

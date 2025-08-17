<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
   public function authorize(): bool {
        return auth()->user()->role === 'user';
    }

    public function rules(): array {
        return [
            'tip_id' => 'required|exists:tips,id',
            'comment' => 'required|string',
        ];
    }
}

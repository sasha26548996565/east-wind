<?php

declare(strict_types=1);

namespace App\Http\Requests\Bot;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->guest();
    }

    public function rules(): array
    {
        return [
            'message' => ['required', 'string']
        ];
    }
}

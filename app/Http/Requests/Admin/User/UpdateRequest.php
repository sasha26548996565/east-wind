<?php

declare(strict_types=1);

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->guest() == false;
    }

    public function rules(): array
    {
        return [
            'available_messages' => 'required|integer'
        ];
    }
}

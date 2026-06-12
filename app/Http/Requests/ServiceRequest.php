<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'service_name' => ['required', 'string', 'max:100'],
            'service_category' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'estimated_duration' => ['nullable', 'integer', 'min:0'],
            'base_price' => ['nullable', 'numeric', 'min:0'],
            'status' => ['nullable', 'string', 'in:active,inactive'],
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TechnicianRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $technician = $this->route('technician');

        return [
            'full_name' => ['required', 'string', 'max:30'],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'email' => [
                'required',
                'email',
                'max:100',
                Rule::unique('technicians', 'email')->ignore($technician),
            ],
            'hire_date' => ['nullable', 'date'],
            'salary' => ['nullable', 'numeric', 'min:0'],
            'specialty' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string', 'in:active,inactive'],
        ];
    }
}

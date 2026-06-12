<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:50'],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:100', Rule::unique('customers', 'email')->ignore($this->customer)],
            'address' => ['nullable', 'string', 'max:100'],
            'city' => ['nullable', 'string', 'max:50'],
            'registration_day' => ['nullable', 'date'],
            'status' => ['nullable', 'string', 'in:active,inactive'],
        ];
    }
}

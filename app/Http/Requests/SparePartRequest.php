<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SparePartRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'part_name' => ['required', 'string', 'max:100'],
            'brand' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
            'unit_price' => ['nullable', 'numeric', 'min:0'],
            'stock_quantity' => ['nullable', 'integer', 'min:0'],
            'supplier' => ['nullable', 'string', 'max:255'],
            'purchase_date' => ['nullable', 'date'],
            'status' => ['nullable', 'string', 'in:active,inactive'],
        ];
    }
}

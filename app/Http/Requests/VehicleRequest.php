<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class VehicleRequest extends FormRequest
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
            'plate_number' => ['required', 'string', 'max:20', Rule::unique('vehicles', 'plate_number')->ignore($this->vehicle)],
            'brand' => ['nullable', 'string', 'max:255'],
            'model' => ['nullable', 'string', 'in:car,suv,truck,coupe'],
            'year' => ['nullable', 'digits:4', 'integer', 'min:1900', 'max:2100'],
            'color' => ['nullable', 'string', 'in:white,black,gray,blue,red,pink,yellow'],
            'fuel_type' => ['nullable', 'string', 'in:gasoline,diesel,electric,hybrid'],
            'customer_id' => ['required', 'integer', 'exists:customers,id'],
        ];
    }
}

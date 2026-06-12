<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaintenanceRequest extends FormRequest
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
            'vehicle_id' => ['required', 'integer', 'exists:vehicles,id'],
            'service_type' => ['nullable', 'string', 'in:routine,major,minor'],
            'entry_date' => ['nullable', 'date'],
            'estimated_delivery_date' => ['nullable', 'date'],
            'current_mileage' => ['nullable', 'integer', 'min:0'],
            'technician_id' => ['required', 'integer', 'exists:technicians,id'],
            'work_description' => ['nullable', 'string'],
            'spare_parts_cost' => ['nullable', 'numeric', 'min:0'],
            'labor_cost' => ['nullable', 'numeric', 'min:0'],
            'total_cost' => ['nullable', 'numeric', 'min:0'],
        ];
    }
}

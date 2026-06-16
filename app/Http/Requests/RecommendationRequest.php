<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecommendationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'vehicle_id' => ['required', 'integer', 'exists:vehicles,id'],
            'recommendation_text' => ['nullable', 'string'],
            'recommended_date' => ['nullable', 'date'],
            'recommended_mileage' => ['nullable', 'integer', 'min:0'],
            'priority' => ['nullable', 'string', 'in:low,medium,high'],
            'status' => ['nullable', 'string', 'in:active,inactive'],
        ];
    }
}

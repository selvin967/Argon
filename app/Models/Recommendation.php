<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Recommendation
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recommendation extends Model
{
    protected $fillable = [
        'vehicle_id',
        'recommendation_text',
        'recommended_date',
        'recommended_mileage',
        'priority',
        'status',
    ];

    protected $casts = [
        'recommended_date' => 'date',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}

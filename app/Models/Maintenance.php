<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Maintenance
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Maintenance extends Model
{
    protected $fillable = [
        'vehicle_id',
        'service_type',
        'entry_date',
        'estimated_delivery_date',
        'current_mileage',
        'technician_id',
        'work_description',
        'spare_parts_cost',
        'labor_cost',
        'total_cost',
    ];

    protected $casts = [
        'entry_date' => 'date',
        'estimated_delivery_date' => 'date',
    ];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function technician(): BelongsTo
    {
        return $this->belongsTo(Technician::class);
    }

    public function maintenanceSpareParts(): HasMany
    {
        return $this->hasMany(MaintenanceSparePart::class);
    }

    public function spareParts(): BelongsToMany
    {
        return $this->belongsToMany(SparePart::class, 'maintenance_spare_parts')
            ->withPivot(['quantity', 'unit_price', 'subtotal'])
            ->withTimestamps();
    }
}

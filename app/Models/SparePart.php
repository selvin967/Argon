<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class SparePart
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SparePart extends Model
{
    use HasFactory;

    protected $fillable = [
        'part_name',
        'brand',
        'description',
        'unit_price',
        'stock_quantity',
        'supplier',
        'purchase_date',
        'status',
    ];

    protected $casts = [
        'purchase_date' => 'date',
    ];

    public function maintenanceSpareParts(): HasMany
    {
        return $this->hasMany(MaintenanceSparePart::class);
    }

    public function maintenances(): BelongsToMany
    {
        return $this->belongsToMany(Maintenance::class, 'maintenance_spare_parts')
            ->withPivot(['quantity', 'unit_price', 'subtotal'])
            ->withTimestamps();
    }
}

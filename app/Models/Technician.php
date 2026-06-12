<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Technician
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Technician extends Model
{
    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'hire_date',
        'salary',
        'specialty',
        'status',
    ];

    protected $casts = [
        'hire_date' => 'date',
    ];

    public function maintenances(): HasMany
    {
        return $this->hasMany(Maintenance::class);
    }
}

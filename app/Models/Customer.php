<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Customer
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{
    protected $fillable = [
        'full_name',
        'phone_number',
        'email',
        'address',
        'city',
        'registration_day',
        'status',
    ];

    protected $casts = [
        'registration_day' => 'date',
    ];

    public function vehicles(): HasMany
    {
        return $this->hasMany(Vehicle::class);
    }
}

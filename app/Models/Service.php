<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_category',
        'description',
        'estimated_duration',
        'base_price',
        'status',
    ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Carrer
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Carrer extends Model
{
    protected $perPage = 20;

    protected $fillable = ['name', 'code', 'students_id'];

    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class, 'students_id', 'id');
    }
}


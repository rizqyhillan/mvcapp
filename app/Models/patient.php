<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable = [
        'name',
        'age',
        'address',
        'pet_type'
    ];
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $fillable = [
        'user_id', 'lat', 'lon', 'created_at', 'updated_at', 'speed', 'altitude', 'travelled'
    ];
}

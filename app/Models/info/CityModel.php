<?php

namespace App\Models\info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name',
        'region_name',
    ];
}

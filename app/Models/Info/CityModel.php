<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_name',
        'region_name',
    ];

    protected $hidden = [
      'created_at',
      'updated_at',
    ];
}

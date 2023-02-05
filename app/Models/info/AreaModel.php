<?php

namespace App\Models\info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'area_name',
    ];
}

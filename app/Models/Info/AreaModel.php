<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'city_id',
        'area_name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

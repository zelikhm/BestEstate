<?php

namespace App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JkModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'city',
        'slug',
        'longitude',
        'latitude',
        'status',
        'class',
        'floors',
        'frames',
        'height',
        'variable',
        'parking',
        'type',
        'support_id',
        'builder_id',
    ];
}

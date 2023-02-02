<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'image'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
}

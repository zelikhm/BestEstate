<?php

namespace App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'color',
        'icon',
    ];
}

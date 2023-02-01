<?php

namespace App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'phone',
    ];
}

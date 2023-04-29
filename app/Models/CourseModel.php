<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'BTC',
        'ETH',
        'USD',
        'EUR',
        'CYN',
    ];
}

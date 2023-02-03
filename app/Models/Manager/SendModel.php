<?php

namespace App\Models\Manager;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'isTg',
        'isWhatsapp',
        'isViber',
        'isPhone',
        'name',
        'phone',
    ];
}

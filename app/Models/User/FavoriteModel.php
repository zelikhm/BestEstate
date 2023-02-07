<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'jk_id',
        'flat_id',
        'village_id',
        'house_id',
        'shale_id',
    ];
}

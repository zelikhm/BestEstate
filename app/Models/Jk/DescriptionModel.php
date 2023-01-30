<?php

namespace App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriptionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'jk_id',
        'title',
    ];
}

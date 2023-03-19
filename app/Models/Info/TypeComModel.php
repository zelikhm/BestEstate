<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeComModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'active'
    ];

}

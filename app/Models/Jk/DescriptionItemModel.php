<?php

namespace App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriptionItemModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'description_id',
        'category',
        'image',
        'description',
        'link',
    ];
}

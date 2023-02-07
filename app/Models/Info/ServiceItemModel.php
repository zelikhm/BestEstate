<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceItemModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'image',
        'description',
    ];
}

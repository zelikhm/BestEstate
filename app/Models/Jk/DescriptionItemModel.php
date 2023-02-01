<?php

namespace App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DescriptionItemModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'description_id',
        'image',
        'description',
        'link',
        'color'
    ];

    public function descript()
    {
        return $this->belongsTo(DescriptionModel::class, 'description_id', 'id');
    }
}

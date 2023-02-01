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

    public function jk() {
        return $this->belongsTo(JkModel::class, 'jk_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(DescriptionItemModel::class, 'description_id', 'id');
    }
}

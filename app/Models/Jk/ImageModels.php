<?php

namespace App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModels extends Model
{
    use HasFactory;

    protected $fillable = [
        'jk_id',
        'image',
    ];

    public function jk() {
        return $this->belongsTo(JkModel::class, 'jk_id', 'id');
    }
}

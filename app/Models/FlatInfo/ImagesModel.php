<?php

namespace App\Models\FlatInfo;

use App\Models\JkFlatModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'flat_id',
        'image',
    ];

    public function flat() {
        return $this->belongsTo(JkFlatModel::class, 'flat_id', 'id');
    }
}

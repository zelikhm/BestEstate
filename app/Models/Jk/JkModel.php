<?php

namespace App\Models\Jk;

use App\Models\BuilderModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JkModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'city',
        'slug',
        'longitude',
        'latitude',
        'status',
        'class',
        'floors',
        'frames',
        'height',
        'variable',
        'parking',
        'type',
        'support_id',
        'builder_id',
    ];

    public function support() {
        return $this->belongsTo(SupportModel::class, 'support_id', 'id');
    }

    public function builder() {
        return $this->belongsTo(BuilderModel::class, 'builder_id', 'id');
    }
}

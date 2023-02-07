<?php

namespace App\Models\Jk;

use App\Models\BuilderModel;
use App\Models\Info\AreaModel;
use App\Models\Info\CityModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JkModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'city',
        'area',
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
        'sale_date'
    ];

    protected $hidden = [
      'city',
      'area'
    ];

    public function city_info() {
        return $this->belongsTo(CityModel::class, 'city', 'id');
    }

    public function area_info() {
        return $this->belongsTo(AreaModel::class, 'area', 'id');
    }

    public function images() {
        return $this->hasMany(ImageModels::class, 'jk_id', 'id');
    }

    public function support() {
        return $this->belongsTo(SupportModel::class, 'support_id', 'id');
    }

    public function builder() {
        return $this->belongsTo(BuilderModel::class, 'builder_id', 'id');
    }
}

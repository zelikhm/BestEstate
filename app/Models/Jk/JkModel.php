<?php

namespace App\Models\Jk;

use App\Models\BuilderModel;
use App\Models\Info\AreaModel;
use App\Models\Info\CityModel;
use App\Models\JkFlatModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\ValueObjects\p;

class JkModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_houses',
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
        'sale_date',
        'price',
        'square',
        'description_page',
        'builder_year'
    ];

    protected $hidden = [
      'city',
      'area'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y',
        'builder_year' => 'datetime:Y'
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

    public function flat() {
        return $this->hasMany(JkFlatModel::class, 'jk_id', 'id');
    }

    public function support() {
        return $this->belongsTo(SupportModel::class, 'support_id', 'id');
    }

    public function builder() {
        return $this->belongsTo(BuilderModel::class, 'builder_id', 'id');
    }
}

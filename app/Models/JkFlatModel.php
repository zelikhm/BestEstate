<?php

namespace App\Models;

use App\Models\FlatInfo\ImagesModel;
use App\Models\FlatInfo\PlanModel;
use App\Models\Info\InfrastructureModel;
use App\Models\Jk\JkModel;
use App\Models\Jk\SupportModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JkFlatModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'jk_id',
        'title',
        'description',
        'support_id',
        'plan',
        'square_main',
        'square_life',
        'square_kitchen',
        'float',
        'height',
        'date_building',
        'type',
        'bathroom',
        'balcon',
        'repair',
        'view',
        'rooms',
        'price',
        'infrastructure',
        'plot_type',
        'type_house',
    ];

    protected $casts = [
        'date_building' => 'date:Y',
        'created_at' => 'date:d-m-Y'
    ];

    public function setInfrastructureAttribute($values) {
        JkFlatModel::where('id', $this->id)->update([
            'infrastructure' => json_encode($values)
        ]);
    }

    public function price_object() {
        return $this->belongsTo(FlatPriceModel::class, 'id', 'flat_id');
    }

    public function jk() {
        return $this->belongsTo(JkModel::class, 'jk_id', 'id');
    }

    public function images() {
        return $this->hasMany(ImagesModel::class, 'flat_id', 'id');
    }

    public function plans() {
        return $this->hasMany(PlanModel::class, 'flat_id', 'id');
    }

    public function builder() {

        return $this->hasOneThrough(
            BuilderModel::class,
            JkModel::class,
            'id',
            'id',
            'jk_id',
            'builder_id'
        );

    }

    public function support() {
        return $this->belongsTo(SupportModel::class, 'support_id', 'id');
    }
}

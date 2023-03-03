<?php

namespace App\Models;

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
    ];

    protected $casts = [
        'date_building' => 'date:Y',
        'created_at' => 'date:d-m-Y'
    ];

    public function jk() {
        return $this->belongsTo(JkModel::class, 'id', 'jk_id');
    }

    public function support() {
        return $this->belongsTo(SupportModel::class, 'support_id', 'id');
    }
}

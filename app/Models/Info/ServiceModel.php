<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function values() {
        return $this->hasMany(ServiceItemModel::class, 'service_id', 'id');
    }
}

<?php

namespace App\Models;

use App\Models\Jk\JkModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlatPriceModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'flat_id',
        'price',
        'sale',
        'rent',
        'rent_price',
    ];

    public function flat() {
        return $this->belongsTo(JkFlatModel::class, 'jk_id', 'id');
    }
}

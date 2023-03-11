<?php

namespace App\Models\Jk;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RenderModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'jk_id',
        'file'
    ];

    public function house() {
        return $this->belongsTo(JkModel::class, 'jk_id', 'id');
    }
}

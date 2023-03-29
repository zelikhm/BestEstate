<?php

namespace App\Models\Manager;

use App\Models\Jk\SupportModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'isTg',
        'isWhatsapp',
        'isViber',
        'isPhone',
        'name',
        'phone',
        'manager_id',
    ];

    public function user() {
        return $this->belongsTo(SupportModel::class, 'manager_id', 'id');
    }
}

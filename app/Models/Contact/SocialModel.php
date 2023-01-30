<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'link',
        'icon',
    ];
}

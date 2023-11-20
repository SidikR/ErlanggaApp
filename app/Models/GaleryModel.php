<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleryModel extends Model
{
    use HasFactory;
    protected $table = 'galery';

    protected $fillable = [
        'uuid',
        'kategory',
        'name',
        'description',
        'image',
    ];
}

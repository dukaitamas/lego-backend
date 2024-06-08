<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $perPage = 10;

    protected $fillable = [
        'number',
        'themeId',
        'subtheme',
        'year',
        'setName',
        'minifigs',
        'pieces',
    ];
}

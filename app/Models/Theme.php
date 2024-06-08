<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $perPage = 10;

    protected $fillable = [
        'name',
        'firstReleased',
        'lastReleased',
    ];
}

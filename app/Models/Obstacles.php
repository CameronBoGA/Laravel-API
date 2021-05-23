<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obstacles extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'maximum',
        'minimum',
        'passable'
    ];
}

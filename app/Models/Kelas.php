<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = ['kelas'];

    protected $casts = [
        'kelas' => 'array'
    ];
}

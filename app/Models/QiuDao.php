<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QiuDao extends Model
{
    protected $table = 'qiudao';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'tgl_indo' => 'date:Y-m-d',
        'created_at' => 'date:Y-m-d',
        'updated_at' => 'date:Y-m-d',
    ];
}

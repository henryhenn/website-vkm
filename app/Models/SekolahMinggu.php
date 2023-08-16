<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SekolahMinggu extends Model
{
    protected $table = 'sekolah_minggu';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'date:d-m-Y'
    ];
}

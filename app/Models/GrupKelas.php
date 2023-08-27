<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GrupKelas extends Model
{
    protected $fillable = [
        'grup_kelas'
    ];

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class);
    }
}

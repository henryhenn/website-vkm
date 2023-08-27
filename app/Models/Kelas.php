<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kelas extends Model
{
    protected $fillable = ['kelas', 'grup_kelas_id'];

    public function grupKelas(): BelongsTo
    {
        return $this->belongsTo(GrupKelas::class);
    }
}

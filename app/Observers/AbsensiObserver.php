<?php

namespace App\Observers;

use App\Models\Absensi;
use App\Traits\UsernameTrait;

class AbsensiObserver
{
    use UsernameTrait;

    public function creating(Absensi $absensi)
    {
        $absensi->user_add = $this->username();
    }

    public function updating(Absensi $absensi)
    {
        $absensi->user_update = $this->username();
    }
}

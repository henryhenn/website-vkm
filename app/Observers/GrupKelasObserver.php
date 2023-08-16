<?php

namespace App\Observers;

use App\Models\GrupKelas;
use App\Traits\UsernameTrait;

class GrupKelasObserver
{
    use UsernameTrait;

    public function creating(GrupKelas $grup_kelas)
    {
        $grup_kelas->user_add = $this->username();
    }

    public function updating(GrupKelas $grup_kelas)
    {
        $grup_kelas->user_update = $this->username();
    }
}

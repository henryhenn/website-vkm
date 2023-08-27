<?php

namespace App\Observers;

use App\Models\Kelas;
use App\Traits\UsernameTrait;

class KelasObserver
{
    use UsernameTrait;

    public function creating(Kelas $kela)
    {
        $kela->user_add = $this->username();
    }

    public function updating(Kelas $kela)
    {
        $kela->user_update = $this->username();
    }
}

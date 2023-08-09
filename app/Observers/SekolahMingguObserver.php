<?php

namespace App\Observers;

use App\Models\SekolahMinggu;
use App\Traits\UsernameTrait;

class SekolahMingguObserver
{
    use UsernameTrait;

    public function creating(SekolahMinggu $sekolah_minggu)
    {
        $sekolah_minggu->user_add = $this->username();
    }

    public function updating(SekolahMinggu $sekolah_minggu)
    {
        $sekolah_minggu->user_update = $this->username();
    }
}

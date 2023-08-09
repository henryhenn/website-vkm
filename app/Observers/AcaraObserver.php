<?php

namespace App\Observers;

use App\Models\Acara;
use App\Models\SekolahMinggu;
use App\Traits\UsernameTrait;

class AcaraObserver
{
    use UsernameTrait;

    public function creating(Acara $acara)
    {
        $acara->user_add = $this->username();
    }

    public function updating(Acara $acara)
    {
        $acara->user_update = $this->username();
    }
}

<?php

namespace App\Observers;

use App\Models\Acara;

class AcaraObserver
{
    protected function username()
    {
        return auth()->user()->username;
    }

    public function saving(Acara $acara)
    {
        $acara->user_add = $this->username();
        $acara->user_update = $this->username();
    }
}

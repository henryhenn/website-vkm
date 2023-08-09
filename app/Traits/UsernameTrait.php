<?php

namespace App\Traits;

trait UsernameTrait
{
    protected function username()
    {
        return auth()->user()->username;
    }
}

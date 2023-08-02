<?php

namespace App\Observers;

use App\Models\QiuDao;

class QiuDaoObserver
{
    protected function username()
    {
        return auth()->user()->username;
    }
    public function saving(QiuDao $qiuDao)
    {
        $qiuDao->user_add = $this->username();
        $qiuDao->user_update = $this->username();
    }
}

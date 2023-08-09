<?php

namespace App\Observers;

use App\Models\QiuDao;
use App\Models\SekolahMinggu;
use App\Traits\UsernameTrait;

class QiuDaoObserver
{
    use UsernameTrait;

    public function creating(QiuDao $qiuDao)
    {
        $qiuDao->user_add = $this->username();
    }

    public function updating(SekolahMinggu $qiuDao)
    {
        $qiuDao->user_update = $this->username();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubMenu extends Model
{
    protected $table = 'sub_menu';

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }
}

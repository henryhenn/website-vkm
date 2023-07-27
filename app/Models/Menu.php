<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    protected $table = 'menu';

    public function subMenus(): HasMany
    {
        return $this->hasMany(SubMenu::class);
    }
}

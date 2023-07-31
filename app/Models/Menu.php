<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Spatie\Permission\Models\Permission;

class Menu extends Model
{
    protected $table = 'menu';

    public function subMenus(): HasMany
    {
        return $this->hasMany(SubMenu::class);
    }

    public function permissions(): HasManyThrough
    {
        return $this->hasManyThrough(Permission::class, SubMenu::class);
    }
}

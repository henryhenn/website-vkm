<?php

namespace App\View;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SidebarComposer
{
    public function compose(View $view)
    {
        $menus = DB::table('menu')
            ->join('sub_menu', 'menu.id', '=', 'sub_menu.id')
            ->where('menu.role_id', '=', auth()->user()->roles->first()->id)
            ->select('menu.id', 'menu', 'role_id', 'sub_menu', 'url', 'icon')
            ->get();


        $view->with('menus', $menus);
    }
}

<?php

namespace Database\Seeders;

use App\Models\SubMenu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sub_menus = SubMenu::query()->select('id', 'sub_menu')->get();

        foreach ($sub_menus as $menu) {
            DB::table('permissions')->insert([
                [
                    'name' => "View $menu->sub_menu",
                    'guard_name' => 'web',
                    'sub_menu_id' => $menu->id
                ],
                [
                    'name' => "Create $menu->sub_menu",
                    'guard_name' => 'web',
                    'sub_menu_id' => $menu->id
                ],
                [
                    'name' => "Edit $menu->sub_menu",
                    'guard_name' => 'web',
                    'sub_menu_id' => $menu->id
                ],
                [
                    'name' => "Delete $menu->sub_menu",
                    'guard_name' => 'web',
                    'sub_menu_id' => $menu->id
                ],
                [
                    'name' => "Control $menu->sub_menu",
                    'guard_name' => 'web',
                    'sub_menu_id' => $menu->id
                ],
            ]);
        }
    }
}

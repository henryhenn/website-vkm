<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_menu')
            ->insert([
               [
                   'menu_id' => 1,
                   'sub_menu' => 'Dashboard',
                   'url' => 'dashboard',
                   'icon' => 'bx bx-home-circle',
                   'active' => 1,
                   'user_add' => 'admin',
                   'user_update' => 'admin'
               ],
                [
                    'menu_id' => 1,
                    'sub_menu' => 'Akses Grup',
                        'url' => 'admin/groupAccess',
                    'icon' => 'bx bx-universal-access',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 1,
                    'sub_menu' => 'User',
                    'url' => 'admin/user',
                    'icon' => 'bx bx-user-circle',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 1,
                    'sub_menu' => 'Pengaturan Imlek',
                    'url' => 'admin/imlek',
                    'icon' => 'bx bx-calendar',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 3,
                    'sub_menu' => 'Pengaturan Menu',
                    'url' => 'menu',
                    'icon' => 'bx bx-menu-alt-left',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 3,
                    'sub_menu' => 'Pengaturan Sub-menu',
                    'url' => 'menu/submenu',
                    'icon' => 'bx bx-subdirectory-right',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 4,
                    'sub_menu' => 'Anggota',
                    'url' => 'data/anggota',
                    'icon' => 'bx bx-user-account',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 4,
                    'sub_menu' => 'Qiu Dao',
                    'url' => 'data/qiudao',
                    'icon' => 'bx bx-',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 4,
                    'sub_menu' => 'Acara',
                    'url' => 'data/acara',
                    'icon' => 'bx bx-calendar-event',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 4,
                    'sub_menu' => 'Ritual',
                    'url' => 'data/ritual',
                    'icon' => 'bx bx-book-open',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
                [
                    'menu_id' => 5,
                    'sub_menu' => 'Album',
                    'url' => 'lagu/album',
                    'icon' => 'bx bx-user-account',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],

                [
                    'menu_id' => 5,
                    'sub_menu' => 'Dao Ge',
                    'url' => 'lagu/daoge',
                    'icon' => 'bx bx-user-account',
                    'active' => 1,
                    'user_add' => 'admin',
                    'user_update' => 'admin'
                ],
            ]);
    }
}

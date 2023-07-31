<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MenuSeeder::class);
        $this->call(SubMenuSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(MasterValueSeeder::class);
        $this->call(TahunImlekSeeder::class);
        $this->call(AcaraSeeder::class);
        $this->call(RitualSeeder::class);
    }
}

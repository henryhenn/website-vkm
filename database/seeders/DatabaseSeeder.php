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
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(MasterValueSeeder::class);
        $this->call(SubMenuSeeder::class);
        $this->call(TahunImlekSeeder::class);
    }
}

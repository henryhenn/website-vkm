<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu')->insert([
            ['menu' => 'Admin', 'role_id' => 1],
            ['menu' => 'User', 'role_id' => 2],
            ['menu' => 'Menu', 'role_id' => null],
            ['menu' => 'Data', 'role_id' => null],
            ['menu' => 'Lagu', 'role_id' => null],
        ]);
    }
}

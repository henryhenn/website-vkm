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
            'menu' => 'Admin'
        ]);

        DB::table('menu')->insert([
            'menu' => 'User'
        ]);

        DB::table('menu')->insert([
            'menu' => 'Menu'
        ]);

        DB::table('menu')->insert([
            'menu' => 'Data'
        ]);

        DB::table('menu')->insert([
            'menu' => 'Lagu'
        ]);
    }
}

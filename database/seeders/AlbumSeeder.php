<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('album')->insert([
            'nama' => 'Pemuda Maitreya 1'
        ]);

        DB::table('album')->insert([
            'nama' => 'Pemuda Maitreya 2'
        ]);

        DB::table('album')->insert([
            'nama' => 'Pemuda Maitreya 3'
        ]);
    }
}

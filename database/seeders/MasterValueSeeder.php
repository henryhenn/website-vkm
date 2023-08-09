<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasterValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mst_value')->insert([
            [
                'kondisi' => 'status_ketuhanan',
                'desc' => 'Pandita',
                'active' => 1
            ],
            [
                'kondisi' => 'status_ketuhanan',
                'desc' => 'Pandita Madya',
                'active' => 1
            ],
            [
                'kondisi' => 'status_ketuhanan',
                'desc' => 'Buddha Siswa',
                'active' => 1
            ],
            [
                'kondisi' => 'status_ketuhanan',
                'desc' => 'Pelaksana',
                'active' => 1
            ],
            [
                'kondisi' => 'status_ketuhanan',
                'desc' => 'Aktivis',
                'active' => 1
            ],
            [
                'kondisi' => 'status_ketuhanan',
                'desc' => 'Umat',
                'active' => 1
            ],
            [
                'kondisi' => 'status_ketuhanan',
                'desc' => 'Umat',
                'active' => 1
            ],
            [
                'kondisi' => 'gol_darah',
                'desc' => 'A',
                'active' => 1
            ],
            [
                'kondisi' => 'gol_darah',
                'desc' => 'B',
                'active' => 1
            ],
            [
                'kondisi' => 'gol_darah',
                'desc' => 'AB',
                'active' => 1
            ],
            [
                'kondisi' => 'gol_darah',
                'desc' => 'O',
                'active' => 1
            ],
            [
                'kondisi' => 'status_vegetarian',
                'desc' => 'Sudah',
                'active' => 1
            ],
            [
                'kondisi' => 'status_vegetarian',
                'desc' => 'Belum',
                'active' => 1
            ],
            [
                'kondisi' => 'status_vegetarian',
                'desc' => 'Belajar',
                'active' => 1
            ],
            [
                'kondisi' => 'status_vegetarian',
                'desc' => 'Sudah Ikrar',
                'active' => 1
            ],
            [
                'kondisi' => 'status_qiu_dao',
                'desc' => 'Sudah',
                'active' => 1
            ],
            [
                'kondisi' => 'status_qiu_dao',
                'desc' => 'Belum',
                'active' => 1
            ],
            [
                'kondisi' => 'Kebaktian Pagi',
                'desc' => '06:00 - 06:45',
                'active' => 1
            ],
            [
                'kondisi' => 'Kebaktian Siang',
                'desc' => '12:00 - 12:45',
                'active' => 1
            ],
            [
                'kondisi' => 'Kebaktian Malam',
                'desc' => '18:00 - 18:45',
                'active' => 1
            ],
        ]);

    }
}

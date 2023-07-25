<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TahunImlekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tahun_imlek')
            ->insert([
                [
                    'tgl_awal' => '2021-01-12',
                    'tgl_akhir' => '2022-01-31',
                    'tahun_imlek1' => '壹佰壹拾',
                    'tahun_imlek2' => 'yi bai yi shi',
                    'nama_tahun1' => '辛丑',
                    'nama_tahun2' => 'Xin Chou',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                ],
                [
                    'tgl_awal' => '2022-02-01',
                    'tgl_akhir' => '2023-01-21',
                    'tahun_imlek1' => '壹佰壹拾壹',
                    'tahun_imlek2' => 'yi bai yi shi yi',
                    'nama_tahun1' => '壬寅',
                    'nama_tahun2' => 'Ren Yin',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                ],
                [
                    'tgl_awal' => '2023-01-22',
                    'tgl_akhir' => '2024-02-09',
                    'tahun_imlek1' => '壹佰壹拾壹',
                    'tahun_imlek2' => 'yi bai yi shi èr',
                    'nama_tahun1' => '癸卯',
                    'nama_tahun2' => 'Guǐ mǎo',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                ],
                [
                    'tgl_awal' => '2024-02-10',
                    'tgl_akhir' => '2025-01-28',
                    'tahun_imlek1' => '壹佰壹拾貮',
                    'tahun_imlek2' => 'yi bai yi shi èr',
                    'nama_tahun1' => '癸卯',
                    'nama_tahun2' => 'Guǐ mǎo',
                    'user_add' => 'admin',
                    'user_update' => 'admin',
                ]
            ]);
    }
}

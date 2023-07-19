<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $karuna_maitreya = User::create([
            'nama_indo' => 'Karuna Maitreya',
            'nama_mandarin_hanzi' => '明光佛堂',
            'nama_mandarin_pinyin' => 'Ming Guang Fo Tang',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '1980-03-22',
            'alamat' => 'Jalan 21, No.91, Teluk Gong, Jakarta Utara',
            'telp' => '021 6615453',
            'gol_darah' => 0,
            'status_ketuhanan' => 0,
            'status_vege' => 0,
            'status_qiudao' => 0,
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'reset_pass' => 0,
            'image' => 'img/admin.jpeg',
            'active' => 1,
            'user_add' => 'admin',
            'date_added' => '2022-01-03'
        ]);

        $karuna_maitreya->assignRole('Admin');

        $welhan = User::create([
            'nama_indo' => 'Welhan Susanto',
            'nama_mandarin_hanzi' => '陳偉漢',
            'nama_mandarin_pinyin' => 'Chen Wei han',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '1980-03-22',
            'alamat' => 'Jalan 21, No.91, Teluk Gong, Jakarta Utara',
            'telp' => '021 6615453',
            'gol_darah' => 0,
            'status_ketuhanan' => 0,
            'status_vege' => 0,
            'status_qiudao' => 0,
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'reset_pass' => 0,
            'image' => 'img/admin.jpeg',
            'active' => 1,
            'user_add' => 'admin',
            'date_added' => '2022-01-03'
        ]);

        $welhan->assignRole('Admin');
    }
}

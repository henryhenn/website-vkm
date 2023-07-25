<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class   UserSeeder extends Seeder
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
            'alamat' => 'Jalan 21 No.91, Teluk Gong, Jakarta Utara',
            'telp' => '021 6615453',
            'gol_darah' => null,
            'status_ketuhanan' => null,
            'status_vegetarian' => null,
            'status_qiu_dao' => null,
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'reset_pass' => 0,
            'image' => 'img/admin.jpeg',
            'active' => 1,
            'user_add' => 'Admin',
            'user_update' => 'Admin'
        ]);

        $karuna_maitreya->assignRole('Admin');

        $welhan = User::create([
            'nama_indo' => 'Welhan Susanto',
            'nama_mandarin_hanzi' => '陳偉漢',
            'nama_mandarin_pinyin' => 'Chen Wei han',
            'tempat_lahir' => 'Jakarta',
            'tgl_lahir' => '1980-03-22',
            'alamat' => 'Komplek Teluk Indah, Blok S, No. 11, Teluk Gong, Jakarta Utara',
            'telp' => '021 6615453',
            'gol_darah' => null,
            'status_ketuhanan' => 'Pelaksana',
            'status_vegetarian' => 'Belajar',
            'status_qiu_dao' => 'Sudah',
            'username' => 'cwh',
            'password' => bcrypt('password'),
            'reset_pass' => 0,
            'image' => 'img/admin.jpeg',
            'active' => 1,
            'user_add' => 'Admin',
            'user_update' => 'Admin',
            'created_at' => '2022-01-03'
        ]);

        $welhan->assignRole('Admin');
    }
}

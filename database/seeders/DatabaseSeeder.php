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
         \App\Models\User::create([
             'nama' => 'Karuna Maitreya',
             'nama_mandarin' => '明光佛堂 - Ming Guang Fo Tang',
             'tempat_lahir' => 'Jakarta',
             'tanggal_lahir' => '1980-03-22',
             'alamat' => 'Jalan 21, No.91, Teluk Gong, Jakarta Utara',
             'telepon' => '0216615453',
             'password' => bcrypt('karuna_maitreya'),
             'golongan_darah_id' => 0,
             'status_ketuhanan_id' => 0,
             'status_vegetarian_id' => 0,
             'status_qiu_dao_id' => 0,
         ]);
    }
}

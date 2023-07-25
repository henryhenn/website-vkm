<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AcaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('acara')
            ->insert([
                [
                    'acara' => 'Che It Bulan 12',
                    'tgl' => '2022-12-23',
                    'active' => 1,
                    'image' => 'Slide32.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Cap Go Bulan 12',
                    'tgl' => '2022-01-17',
                    'active' => 1,
                    'image' => 'Cap_Go_Bln_12.jpg',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-02-20'
                ],
                [
                    'acara' => 'Kelahiran Buddha Maitreya',
                    'tgl' => '2022-02-01',
                    'active' => 1,
                    'image' => 'Imlek.jpg',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-01-08'
                ],
                [
                    'acara' => 'Cap Go Me',
                    'tgl' => '2022-02-05',
                    'active' => 1,
                    'image' => 'Screenshot_20220214-133306_Instagram.jpg',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-02-15'
                ],
                [
                    'acara' => 'Che It Bulan 2',
                    'tgl' => '2022-02-15',
                    'active' => 1,
                    'image' => 'Slide1.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-02-15'
                ],
                [
                    'acara' => 'Parinibana Buddha Cin Kung',
                    'tgl' => '2022-02-21',
                    'active' => 1,
                    'image' => 'Slide2.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-02-20'
                ],
                [
                    'acara' => 'Cap Go Bulan 2',
                    'tgl' => '2023-03-06',
                    'active' => 1,
                    'image' => 'Slide3.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-02-20'
                ],
                [
                    'acara' => 'Kelahiran B. Avalokitesvara',
                    'tgl' => '2023-03-10',
                    'active' => 1,
                    'image' => 'Slide4.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-02-20'
                ],
                [
                    'acara' => 'Parinibana Ibu Guru Suci',
                    'tgl' => '2023-03-14',
                    'active' => 1,
                    'image' => 'Slide51.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-03-06'
                ],
                [
                    'acara' => 'Che It Bulan 3',
                    'tgl' => '2023-04-20',
                    'active' => 1,
                    'image' => 'Slide81.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-03-22'
                ],
                [
                    'acara' => 'Lao Mu Da Dian (I)',
                    'tgl' => '2023-05-04',
                    'active' => 1,
                    'image' => 'Slide91.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-03-22'
                ],
                [
                    'acara' => 'Che It Bulan 4',
                    'tgl' => '2023-05-19',
                    'active' => 1,
                    'image' => 'Slide10.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-03-22'
                ],
                [
                    'acara' => 'Tri Suci Waisak',
                    'tgl' => '2023-06-02',
                    'active' => 1,
                    'image' => 'Slide11.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-03-22'
                ],
                [
                    'acara' => 'Kelahiran Buddha Cin Kung',
                    'tgl' => '2023-06-11',
                    'active' => 1,
                    'image' => 'Slide121.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
                [
                    'acara' => 'Che It Bulan 5',
                    'tgl' => '2023-05-04',
                    'active' => 1,
                    'image' => 'Slide91.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-03-22'
                ],
                [
                    'acara' => 'Parinibana Bodhisatva Te Wei',
                    'tgl' => '2023-06-22',
                    'active' => 1,
                    'image' => 'Slide141.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
                [
                    'acara' => 'Cap Go Bulan 5',
                    'tgl' => '2023-07-02',
                    'active' => 1,
                    'image' => 'Slide161.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
                [
                    'acara' => 'Che It Bulan 6',
                    'tgl' => '2023-07-18',
                    'active' => 1,
                    'image' => 'Slide22.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-07-11'
                ],
                [
                    'acara' => 'Lao Mu Da Dian (II)',
                    'tgl' => '2023-08-01',
                    'active' => 1,
                    'image' => 'Slide18.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
                [
                    'acara' => 'Kesempurnaan B. Avalokitesvara',
                    'tgl' => '2023-08-05',
                    'active' => 1,
                    'image' => 'Slide191.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
                [
                    'acara' => 'Kelahiran B. Satya Kalama',
                    'tgl' => '2023-08-10',
                    'active' => 1,
                    'image' => 'Slide201.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
                [
                    'acara' => 'Parinibana Fu Qian Ren',
                    'tgl' => '2023-08-16',
                    'active' => 1,
                    'image' => 'Slide211.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
                [
                    'acara' => 'Cap Go Bulan 7',
                    'tgl' => '2023-08-30',
                    'active' => 1,
                    'image' => 'Slide221.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
                [
                    'acara' => 'Kelahiran Bapak Guru Agung',
                    'tgl' => '2022-08-16',
                    'active' => 1,
                    'image' => 'Slide20.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-01'
                ],
                [
                    'acara' => 'Che It Bulan 8',
                    'tgl' => '2022-08-27',
                    'active' => 1,
                    'image' => 'Slide21.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-01'
                ],
                [
                    'acara' => 'Parinibana Bapak Guru Agung',
                    'tgl' => '2022-09-10',
                    'active' => 1,
                    'image' => 'Slide22.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Kelahiran Ibu Guru Suci',
                    'tgl' => '2022-09-10',
                    'active' => 1,
                    'image' => 'Slide22.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Che It Bulan 9',
                    'tgl' => '2022-09-26',
                    'active' => 1,
                    'image' => 'Slide24.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-09-26'
                ],
                [
                    'acara' => 'Lao Mu Dian (III)',
                    'tgl' => '2022-010-10',
                    'active' => 1,
                    'image' => 'Slide25.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Parinibana B. Avalokitesvara',
                    'tgl' => '2022-10-14',
                    'active' => 1,
                    'image' => 'Slide26.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Che It Bulan 10',
                    'tgl' => '2022-10-25',
                    'active' => 1,
                    'image' => 'Slide27.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Cap Go Bulan 10',
                    'tgl' => '2022-11-08',
                    'active' => 1,
                    'image' => 'Slide28.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Che It Bulan 11',
                    'tgl' => '2022-11-08',
                    'active' => 1,
                    'image' => 'Slide29.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Lao Mu Dian (IV) Parinibana Hong Chang Di Zun',
                    'tgl' => '2022-12-08',
                    'active' => 1,
                    'image' => 'Slide30.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Parinibana Hao Ci Da Di',
                    'tgl' => '2022-12-11',
                    'active' => 1,
                    'image' => 'Slide31.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-05-01'
                ],
                [
                    'acara' => 'Mengantar Dewa Zao Jun',
                    'tgl' => '2022-11-24',
                    'active' => 1,
                    'image' => 'IMG-20220124-WA0000.jpg',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-01-25'
                ],
                [
                    'acara' => 'Parinibana Zhao Cheng Yuan Jun',
                    'tgl' => '2022-11-24',
                    'active' => 1,
                    'image' => null,
                    'tempat' => null,
                    'user_add' => 'cysman87',
                    'user_update' => 'cysman87',
                    'created_at' => '2022-01-12'
                ],
                [
                    'acara' => 'Pusbatara',
                    'tgl' => '2022-09-26',
                    'active' => 1,
                    'image' => 'Pusbatara.jpg',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2022-09-26'
                ],
                [
                    'acara' => 'Che It Bulan 2 (Run Yue)',
                    'tgl' => '2023-03-22',
                    'active' => 1,
                    'image' => 'Slide61.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-02-20'
                ],
                [
                    'acara' => 'Cap Go Bulan 2 (Run Yue)',
                    'tgl' => '2023-04-05',
                    'active' => 1,
                    'image' => 'Slide7.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-03-22'
                ],
                [
                    'acara' => 'Bazaar Dan Perayaan Waisak',
                    'tgl' => '2023-06-04',
                    'active' => 1,
                    'image' => 'Slide151.JPG',
                    'tempat' => null,
                    'user_add' => 'cwh',
                    'user_update' => 'cwh',
                    'created_at' => '2023-05-19'
                ],
            ]);
    }
}

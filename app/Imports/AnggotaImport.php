<?php

namespace App\Imports;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnggotaImport implements ToCollection, WithHeadingRow, WithChunkReading
{

    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            User::insert([
                'nama_indo' => $row['nama_anggota'],
                'nama_mandarin_hanzi' => $row['nama_mandarin_hanzi'],
                'nama_mandarin_pinyin' => $row['nama_mandarin_pinyin'],
                'tempat_lahir' => $row['tempat_lahir'],
                'tgl_lahir' => Carbon::createFromFormat('d/m/Y', $row['tanggal_lahir']),
                'alamat' => $row['alamat'],
                'telp' => $row['no_telepon'],
                'gol_darah' => $row['gol_darah'],
                'status_ketuhanan' => $row['status_ketuhanan'],
                'status_vegetarian' => $row['status_vegetarian'],
                'status_qiu_dao' => $row['status_qiu_dao'],
                'user_add' => auth()->user()->username,
                'user_update' => auth()->user()->username,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        };
    }

    public function chunkSize(): int
    {
        return 100;
    }
}

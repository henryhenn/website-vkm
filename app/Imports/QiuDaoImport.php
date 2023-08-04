<?php

namespace App\Imports;

use App\Models\QiuDao;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class QiuDaoImport implements ToCollection, WithHeadingRow, WithChunkReading
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            QiuDao::insert([
                'no_urut' => $row['no_urut'],
                'nama_indo' => $row['nama_indonesia'],
                'nama_Mandarin_hanzi' => $row['nama_mandarin_hanzi'],
                'nama_mandarin_pinyin' => $row['nama_mandarin_pinyin'],
                'tgl_indo' => Carbon::createFromFormat('d/m/Y', $row['tanggal_indonesia']),
                'bln_imlek' => $row['bulan_imlek'],
                'tgl_imlek' => $row['tanggal_imlek'],
                'jenis_kelamin' => $row['jenis_kelamin'],
                'alamat' => $row['alamat'],
                'telp' => $row['no_telepon'],
                'pengajak' => $row['pengajak'],
                'penanggung' => $row['penanggung'],
                'pandita' => $row['pandita'],
                'amal' => $row['amal'],
                'user_add' => auth()->user()->username,
                'user_update' => auth()->user()->username,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function chunkSize(): int
    {
        return 100;
    }
}

<?php

namespace App\Imports;

use App\Models\QiuDao;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class QiuDaoImport implements ToCollection, WithHeadingRow, WithChunkReading, WithValidation
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
                'no_telepon' => $row['no_telepon'],
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

    public function rules(): array
    {
        return [
            'no_urut' => 'required|integer',
            'nama_indonesia' => 'required|unique:qiudao,nama_indo|string|max:100',
            'nama_mandarin_hanzi' => 'nullable|unique:qiudao,nama_mandarin_hanzi|string|max:100',
            'nama_mandarin_pinyin' => 'nullable|unique:qiudao,nama_mandarin_pinyin|string|max:100',
            'alamat' => 'required|sometimes|string',
            'no_telepon' => 'required|sometimes|string|max:14',
            'tanggal_indonesia' => 'required',
            'tanggal_imlek' => 'required',
            'bulan_imlek' => 'required',
            'jenis_kelamin' => 'required',
            'pengajak' => 'required|string',
            'penanggung' => 'required|string',
            'pandita' => 'required|string',
            'amal' => 'required|integer',
        ];
    }

    public function customValidationMessages(): array
    {
        return [
            'nama_indonesia.required' => 'Nama Indonesia wajib diisi!',
            'nama_indonesia.unique' => 'Nama Indonesia sudah ada!',
            'nama_indonesia.string' => 'Nama Indonesia harus berupa huruf!',
            'nama_indonesia.max' => 'Nama Indonesia maksimal 100 karakter!',
            'nama_mandarin_hanzi.string' => 'Nama Mandarin (Hanzi) harus berupa huruf!',
            'nama_mandarin_hanzi.unique' => 'Nama Mandarin (Hanzi) sudah ada!',
            'nama_mandarin_hanzi.max' => 'Nama Mandarin (Hanzi) maksimal 100 karakter!',
            'nama_mandarin_pinyin.unique' => 'Nama Mandarin (Pinyin) sudah ada!',
            'nama_mandarin_pinyin.string' => 'Nama Mandarin (Pinyin) harus berupa huruf!',
            'nama_mandarin_pinyin.max' => 'Nama Mandarin (Pinyin) maksimal 100 karakter!',
            'alamat.required' => 'Alamat wajib diisi!',
            'alamat.string' => 'Alamat harus berupa huruf!',
            'no_telepon.required' => 'No. Telepon wajib diisi!',
            'no_telepon.max' => 'No. Telepon maksimal 14 karakter!',
            'tanggal_indonesia.required' => 'Tanggal Indonesia wajib diisi!',
            'tanggal_imlek.required' => 'Tanggal Imlek wajib diisi!',
            'bulan_imlek.required' => 'Bulan Imlek wajib diisi!',
            'pengajak.required' => 'Nama pengajak wajib diisi!',
            'pengajak.string' => 'Nama pengajak harus berupa huruf!',
            'penanggung.required' => 'Nama penanggung wajib diisi!',
            'penanggung.string' => 'Nama penanggung harus berupa huruf!',
            'pandita.required' => 'Nama pandita wajib diisi!',
            'pandita.string' => 'Nama pandita harus berupa huruf!',
            'amal.required' => 'Amal wajib diisi!',
            'amal.integer' => 'Amal harus berupa angka!',
        ];
    }
}

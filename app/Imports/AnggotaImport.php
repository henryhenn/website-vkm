<?php

namespace App\Imports;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class AnggotaImport implements ToCollection, WithHeadingRow, WithChunkReading, WithValidation
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

    public function rules(): array
    {
        return [
            'nama_anggota' => 'required|unique:users,nama_indo|sometimes|string|max:100',
            'nama_mandarin_hanzi' => 'nullable|unique:users,nama_mandarin_hanzi|string|max:100',
            'nama_mandarin_pinyin' => 'nullable|unique:users,nama_mandarin_pinyin|string|max:100',
            'tempat_lahir' => 'required|sometimes|string|max:50',
            'tanggal_lahir' => 'required|sometimes',
            'alamat' => 'required|sometimes|string',
            'no_telpon' => 'required|sometimes|string|max:14',
            'gol_darah' => 'nullable|string',
            'status_ketuhanan' => 'nullable|string',
            'status_vegetarian' => 'nullable|string',
            'status_qiu_dao' => 'nullable|string',
        ];
    }

    public function customValidationMessages(): array
    {
        return [
            'nama_anggota.required' => 'Nama Indonesia wajib diisi!',
            'nama_anggota.unique' => 'Nama Indonesia sudah ada!',
            'nama_anggota.string' => 'Nama Indonesia harus berupa huruf!',
            'nama_anggota.max' => 'Nama Indonesia maksimal 100 karakter!',
            'nama_mandarin_hanzi.string' => 'Nama Mandarin (Hanzi) harus berupa huruf!',
            'nama_mandarin_hanzi.unique' => 'Nama Mandarin (Hanzi) sudah ada!',
            'nama_mandarin_hanzi.max' => 'Nama Mandarin (Hanzi) maksimal 100 karakter!',
            'nama_mandarin_pinyin.string' => 'Nama Mandarin (Pinyin) harus berupa huruf!',
            'nama_mandarin_pinyin.unique' => 'Nama Mandarin (Pinyin) sudah ada!',
            'nama_mandarin_pinyin.max' => 'Nama Mandarin (Pinyin) maksimal 100 karakter!',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi!',
            'tempat_lahir.string' => 'Tempat lahir harus berupa huruf!',
            'tempat_lahir.max' => 'Tempat lahir maksimal 50 karakter!',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'alamat.string' => 'Alamat harus berupa huruf!',
            'no_telepon.required' => 'No. Telepon wajib diisi!',
            'no_telepon.max' => 'No. Telepon maksimal 14 karakter!',
        ];
    }
}

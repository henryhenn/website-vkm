<?php

namespace App\Imports;

use App\Models\SekolahMinggu;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SekolahMingguImport implements ToCollection, WithHeadingRow, WithChunkReading, WithValidation
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            SekolahMinggu::insert([
                'nama' => $row['nama_lengkap'],
                'tgl_lahir' => Carbon::createFromFormat('d/m/Y', $row['tanggal_lahir']),
                'alamat' => $row['alamat'],
                'telp' => $row['no_telepon'],
                'kelas_cth' => $row['kelas_contoh'],
                'nama_ortu' => $row['nama_orang_tua'],
                'status_qiu_dao' => $row['status_qiu_dao'],
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
            'nama_lengkap' => 'required|unique:sekolah_minggu,nama|sometimes|string|max:100',
            'tanggal_lahir' => 'required',
            'kelas_contoh' => 'required',
            'alamat' => 'required|string',
            'no_telepon' => 'required|max:14',
            'nama_orang_tua' => 'required|string|max:100',
            'status_qiu_dao' => 'required',
        ];
    }

    public function customValidationMessages(): array
    {
        return [
            'nama_lengkap.unique' => 'Nama lengkap sudah ada!',
            'nama_lengkap.required' => 'Nama lengkap wajib diisi!',
            'nama_lengkap.string' => 'Nama lengkap harus berupa huruf!',
            'nama_lengkap.max' => 'Nama lengkap maksimal 100 karakter!',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
            'alamat.required' => 'Alamat wajib diisi!',
            'kelas_contoh.required' => 'Kelas wajib diisi!',
            'alamat.string' => 'Alamat harus berupa huruf!',
            'no_telepon.required' => 'No. Telepon wajib diisi!',
            'no_telepon.max' => 'No. Telepon maksimal 14 karakter!',
            'nama_orang_tua.required' => 'Nama orang tua wajib diisi!',
            'nama_orang_tua.string' => 'Nama orang tua harus berupa huruf!',
            'nama_orang_tua.max' => 'Nama orang tua maksimal 100 karakter!',
            'status_qiu_dao.required' => 'Status Qiu Dao wajib diisi!',
        ];
    }
}

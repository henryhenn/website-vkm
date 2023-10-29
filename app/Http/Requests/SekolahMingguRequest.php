<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SekolahMingguRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->hasAnyPermission(['Create Sekolah Minggu', 'Edit Sekolah Minggu']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required|max:100',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'kelas_id' => 'required',
            'telp' => 'required|max:14',
            'nama_ortu' => 'required|string|max:100',
            'status_qiu_dao' => 'nullable',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan'
        ];
    }

    public function messages():array
    {
        return [
            'nama.required' => 'Nama Lengkap wajib diisi!',
            'nama.max' => 'Nama Lengkap maksimal 100 karakter!',
            'nama_ortu.required' => 'Nama Orang Tua wajib diisi!',
            'nama_ortu.max' => 'Nama Orang Tua maksimal 100 karakter!',
            'tgl_lahir.required' => 'Tanggal lahir wajib diisi!',
            'tgl_lahir.date' => 'Tanggal lahir harus berupa tanggal!',
            'alamat.required' => 'Alamat wajib diisi!',
            'kelas_id.required' => 'Kelas wajib diisi!',
            'telp.required' => 'No. Telepon wajib diisi!',
            'telp.max' => 'No. Telepon maksimal 14 karakter!',
            'status_qiu_dao.required' => 'Status Qiu Dao wajib diisi!',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi!',
            'jenis_kelamin.string' => 'Value Jenis Kelamin tidak valid!',
            'jenis_kelamin.in' => 'Value Jenis Kelamin tidak valid!',
        ];
    }
}

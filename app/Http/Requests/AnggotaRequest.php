<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnggotaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama_indo' => 'required|sometimes|string|max:100',
            'nama_mandarin_hanzi' => 'nullable|string|max:100',
            'nama_mandarin_pinyin' => 'nullable|string|max:100',
            'tempat_lahir' => 'required|sometimes|string|max:50',
            'tgl_lahir' => 'required|sometimes|date',
            'alamat' => 'required|sometimes|string',
            'telp' => 'required|sometimes|string|max:14',
            'gol_darah' => 'nullable|string|exists:mst_value,id',
            'status_ketuhanan' => 'nullable|string|exists:mst_value,id',
            'status_vegetarian' => 'nullable|string|exists:mst_value,id',
            'status_qiu_dao' => 'nullable|string|exists:mst_value,id',
            'image' => 'nullable|file|mimes:jpeg,jpg,png|max:4096',
            'username' => 'required|sometimes|string|max:50',
            'password' => 'required|sometimes',
        ];
    }

    public function messages()
    {
        return [
            'nama_indo.required' => 'Nama Indonesia wajib diisi!',
            'nama_indo.string' => 'Nama Indonesia harus berupa huruf!',
            'nama_indo.max' => 'Nama Indonesia maksimal 100 karakter!',
            'nama_mandarin_hanzi.string' => 'Nama Mandarin (Hanzi) harus berupa huruf!',
            'nama_mandarin_hanzi.max' => 'Nama Mandarin (Hanzi) maksimal 100 karakter!',
            'nama_mandarin_pinyin.string' => 'Nama Mandarin (Pinyin) harus berupa huruf!',
            'nama_mandarin_pinyin.max' => 'Nama Mandarin (Pinyin) maksimal 100 karakter!',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi!',
            'tempat_lahir.string' => 'Tempat lahir harus berupa huruf!',
            'tempat_lahir.max' => 'Tempat lahir maksimal 50 karakter!',
            'tgl_lahir.required' => 'Tanggal lahir wajib diisi!',
            'tgl_lahir.date' => 'Tanggal lahir harus berupa tanggal!',
            'alamat.required' => 'Alamat wajib diisi!',
            'alamat.string' => 'Alamat harus berupa huruf!',
            'telp.required' => 'No. Telepon wajib diisi!',
            'telp.max' => 'No. Telepon maksimal 14 karakter!',
            'image.mimes' => 'Format gambar yang diperbolehkan hanya: PNG, JPG, JPEG',
            'image.max' => 'Maks. ukuran gambar adalah 4 MB',
            'username.required' => 'Username wajib diisi!',
            'username.string' => 'Username harus berupa huruf!',
            'username.max' => 'Username maksimal 50 karakter!',
            'password.required' => 'Password wajib diisi!',
        ];
    }
}

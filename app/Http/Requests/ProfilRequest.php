<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
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
            'nama_indo' => 'required|string|max:100',
            'nama_mandarin_hanzi' => 'nullable|string|max:100',
            'nama_mandarin_pinyin' => 'nullable|string|max:100',
            'tempat_lahir' => 'required|string|max:50',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required|string',
            'telp' => 'required|string|max:14',
            'gol_darah' => 'nullable|integer|exists:mst_value,id',
            'status_ketuhanan' => 'nullable|integer|exists:mst_value,id',
            'status_vegetarian' => 'nullable|integer|exists:mst_value,id',
            'status_qiu_dao' => 'nullable|integer|exists:mst_value,id',
            'image' => 'nullable|file|mimes:jpeg,jpg,png|max:4096',
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
            'image.max' => 'Maks. ukuran gambar adalah 4 MB'
        ];
    }
}

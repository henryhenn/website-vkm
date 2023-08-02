<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QiuDaoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check() && auth()->user()->hasAnyPermission(['Create Qiu Dao', 'Edit Qiu Dao']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'no_urut' => 'required|integer',
            'nama_indo' => 'required|sometimes|string|max:100',
            'nama_mandarin_hanzi' => 'nullable|string|max:100',
            'nama_mandarin_pinyin' => 'nullable|string|max:100',
            'alamat' => 'required|sometimes|string',
            'telp' => 'required|sometimes|string|max:14',
            'tgl_indo' => 'required|date',
            'tgl_imlek' => 'nullable',
            'bln_imlek' => 'nullable',
            'jenis_kelamin' => 'nullable',
            'pengajak' => 'required|string',
            'penanggung' => 'required|string',
            'pandita' => 'required|string',
            'amal' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'nama_indo.required' => 'Nama Indonesia wajib diisi!',
            'nama_indo.string' => 'Nama Indonesia harus berupa huruf!',
            'nama_indo.max' => 'Nama Indonesia maksimal 100 karakter!',
            'nama_mandarin_hanzi.string' => 'Nama Mandarin (Hanzi) harus berupa huruf!',
            'nama_mandarin_hanzi.max' => 'Nama Mandarin (Hanzi) maksimal 100 karakter!',
            'nama_mandarin_pinyin.string' => 'Nama Mandarin (Pinyin) harus berupa huruf!',
            'nama_mandarin_pinyin.max' => 'Nama Mandarin (Pinyin) maksimal 100 karakter!',
            'alamat.required' => 'Alamat wajib diisi!',
            'alamat.string' => 'Alamat harus berupa huruf!',
            'telp.required' => 'No. Telepon wajib diisi!',
            'telp.max' => 'No. Telepon maksimal 14 karakter!',
            'tgl_indo.required' => 'Tanggal Indonesia wajib diisi!',
            'tgl_indo.date' => 'Tanggal Indonesia harus berupa tanggal!',
            'pengajak.required' => 'Nama pengajak wajib diisi!',
            'pengajak.string' => 'Nama pengajak harus berupa huruf!',
            'penanggung.required' => 'Nama penanggung wajib diisi!',
            'penanggung.string' => 'Nama penanggung harus berupa huruf!',
            'pandita.required' => 'Nama pandita wajib diisi!',
            'pandita.string' => 'Nama pandita harus berupa huruf!',
            'amal.required' => 'Amal wajib diisi!',
            'amal.integer' => 'Amal harus berupa huruf!',
        ];
    }
}

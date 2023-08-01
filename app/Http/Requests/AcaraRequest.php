<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcaraRequest extends FormRequest
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
            'acara' => 'required|sometimes|string|max:200',
            'tgl' => 'required|sometimes|date',
            'jam_mulai' => 'nullable',
            'jam_selesai' => 'nullable',
            'image' => 'required|sometimes|file|mimes:jpeg,jpg,png|max:4096',
            'tempat' => 'nullable|string'
        ];
    }

    public function messages(): array
    {
        return [
          'acara.required' => 'Nama acara wajib diisi!',
          'acara.max' => 'Nama acara maksimal 200 karakter',
          'tgl.required' => 'Tanggal acara wajib diisi!',
          'tgl.date' => 'Tanggal harus berupa tanggal',
          'image.required' => 'Gambar wajib diisi!',
          'image.file' => 'Gambar harus berupa file',
          'image.mimes' => 'Gambar harus berformat JPG, JPEG, atau PNG',
        ];
    }
}

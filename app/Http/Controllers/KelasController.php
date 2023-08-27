<?php

namespace App\Http\Controllers;

use App\Models\GrupKelas;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class KelasController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'grup_kelas_id' => 'required',
            'kelas' => 'required'
        ], [
            'kelas.required' => 'Nama kelas wajib diisi!'
        ]);

        $kelas = $request->get('kelas');

        foreach ($kelas as $data) {
            Kelas::create([
                'kelas' => $data,
                'grup_kelas_id' => $request->get('grup_kelas_id')
            ]);
        }

        return back()->with('message', 'Kelas berhasil ditambahkan!');
    }

    public function update(Request $request, Kelas $kela)
    {
        $this->validate($request, [
            'kelas' => 'required'
        ], [
            'kelas.required' => 'Nama kelas wajib diisi!'
        ]);

        $kela->update($request->only('kelas'));

        return back()->with('message', 'Kelas berhasil diupdate!');
    }

    public function destroy(Kelas $kela)
    {
        $kela->delete();

        return back()->with('message', 'Kelas berhasil dihapus!');
    }

    public function getKelasById(Kelas $kelas)
    {
        return response()->json([
            'data' => $kelas->load('grupKelas'),
            'status' => Response::HTTP_OK
        ]);
    }
}

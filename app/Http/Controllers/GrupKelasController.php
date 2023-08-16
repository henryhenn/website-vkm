<?php

namespace App\Http\Controllers;

use App\Models\GrupKelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GrupKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grup_kelas = DB::table('grup_kelas')
            ->select('id', 'grup_kelas', 'created_at')
            ->paginate(100);

        return view('grup-kelas.index', compact('grup_kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'grup_kelas' => 'required|string|max:100'
        ], [
            'grup_kelas.required' => 'Grup kelas wajib diisi!',
            'grup_kelas.string' => 'Grup kelas harus berupa karakter!',
            'grup_kelas.max' => 'Grup kelas maksimal 100 karakter!'
        ]);

        GrupKelas::create(['grup_kelas' => $request->string('grup_kelas')]);

        return back()->with('message', 'Grup kelas berhasil ditambahkan!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GrupKelas $grup_kela)
    {
        $this->validate($request, [
            'grup_kelas' => 'required|string|max:100'
        ], [
            'grup_kelas.required' => 'Grup kelas wajib diisi!',
            'grup_kelas.string' => 'Grup kelas harus berupa karakter!',
            'grup_kelas.max' => 'Grup kelas maksimal 100 karakter!'
        ]);

        $grup_kela->update(['grup_kelas' => $request->string('grup_kelas')]);

        return back()->with('message', 'Grup kelas berhasil diudpate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GrupKelas $grup_kela)
    {
        $grup_kela->delete();

        return back()->with('message', 'Grup kelas berhasil dihapus!');
    }

    public function getGrupKelasById(GrupKelas $grupkelas)
    {
        return response()->json([
            'data' => $grupkelas,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }
}

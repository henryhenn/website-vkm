<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnggotaRequest;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil.index');
    }

    public function edit()
    {
        $gol_darah = DB::table('mst_value')
            ->where('kondisi', 'gol_darah')
            ->get();
        $status_ketuhanan = DB::table('mst_value')
            ->where('kondisi', 'status_ketuhanan')
            ->get();
        $status_qiu_dao = DB::table('mst_value')
            ->where('kondisi', 'status_qiu_dao')
            ->get();

        return view('profil.edit', compact('gol_darah', 'status_ketuhanan', 'status_qiu_dao'));
    }

    public function update(AnggotaRequest $request)
    {
        DB::table('users')
            ->where('id', auth()->id())
            ->update($request->validated());

        return to_route('profil.index')->with('message', 'Profil berhasil diperbarui!');
    }
}

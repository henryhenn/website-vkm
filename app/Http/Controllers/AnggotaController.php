<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnggotaRequest;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = User::query()
            ->select('*')
            ->paginate(100);

        return view('anggota.index', compact('anggota'));
    }

    public function store(AnggotaRequest $request)
    {
        User::create($request->validated());

        return back()->with('message', 'Anggota berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $anggota = User::findOrFail($id);

        return view('anggota.detail', compact('anggota'));
    }

    public function update(AnggotaRequest $request, string $id)
    {
        User::findOrFail($id)->update($request->validated());

        return back()->with('message', 'Akun berhasil dibuatkan!');
    }

    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back()->with('message', 'Data Anggota Berhasil Dihapus!');
    }

    public function getStatus()
    {
        $status = DB::table('mst_value')
            ->select('id', 'kondisi', 'desc')
            ->where('kondisi', request('status'))
            ->get();

        return response()->json([
            'data' => $status,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }

    public function getAnggotaById(string $id)
    {
        $anggota = DB::table('users')
            ->select("*")
            ->where('id', $id)
            ->first();

        return response()->json([
            'data' => $anggota,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SekolahMingguRequest;
use App\Models\SekolahMinggu;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SekolahMingguController extends Controller
{
    public function index()
    {
        $this->middleware('permission:View Sekolah Minggu');

        $anak = DB::table('sekolah_minggu')
            ->orderBy('nama')
            ->select('id', 'nama', 'telp', 'nama_ortu', 'created_at')
            ->paginate(100);

        return view('smb.index', compact('anak'));
    }

    public function store(SekolahMingguRequest $request)
    {
        $this->middleware('permission:Create Sekolah Minggu');

        SekolahMinggu::create($request->validated());

        return back()->with('message', 'Data Sekolah Minggu berhasil ditambahkan!');
    }

    public function show(SekolahMinggu $sekolah_minggu)
    {
        $this->middleware('permission:View Sekolah Minggu');

        return view('smb.detail', compact('sekolah_minggu'));
    }

    public function update(SekolahMingguRequest $request, SekolahMinggu $sekolah_minggu)
    {
        $this->middleware('permission:Edit Sekolah Minggu');

        $sekolah_minggu->update($request->validated());

        return back()->with('message', 'Data Sekolah Minggu berhasil diudpate!');
    }

    public function destroy(SekolahMinggu $sekolah_minggu)
    {
        $this->middleware('permission:Delete Sekolah Minggu');

        $sekolah_minggu->delete();

        return back()->with('message', 'Data Sekolah Minggu berhasil dihapus!');
    }

    public function getAnakById(SekolahMinggu $anak)
    {
        return response()->json([
            'data' => $anak,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }
}

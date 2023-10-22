<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\SekolahMinggu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = DB::table('absensis')
            ->distinct()
            ->get();

        return view('absensi.index', compact('absensi'));
    }

    public function create()
    {
        $siswa = DB::table('sekolah_minggu')
            ->select('id', 'nama')
            ->orderBy('nama')
            ->get();

        return view('absensi.create', compact('siswa'));
    }

    public function show(string $id)
    {
        $absensi = Absensi::find($id)->first();

        return view('absensi.detail', compact('absensi'));
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);

        $absensis = Absensi::create([
            'tanggal' => $request->date('tanggal')
        ]);

        foreach ($request->get('sekolah_minggu_id') as $siswa) {
            $absensis->sekolahMinggu()->attach($siswa);
        }

        return redirect()->route('absensi.index')->with('message', 'Absensi berhasil ditambahkan!');
    }

    public function edit(string $id)
    {
        $absensi = Absensi::query()
            ->find($id)
            ->with('sekolahMinggu')
            ->get();
//        dd($absensi);

        return view('absensi.edit', compact('absensi'));
    }

    public function update(Request $request)
    {
        $this->validateRequest($request);

        DB::transaction(function () use ($request) {
            DB::table('absensis')->delete();

            foreach ($request->get('sekolah_minggu_id') as $siswa) {
                Absensi::create([
                    'tanggal' => $request->date('tanggal'),
                    'sekolah_minggu_id' => $siswa
                ]);
            }
        });

        return to_route('absensi.index')->with('message', 'Absensi berhasil diupdate!');
    }

    public function destroy(string $date)
    {
        Absensi::query()->where('tanggal', $date)->delete();

        return back()->with('message', 'Absensi berhasil dihapus!');
    }

    protected function getAbsensiById(string $id)
    {
        return response()->json([
            'data' => Absensi::find($id)->first(),
            'status' => Response::HTTP_OK
        ]);
    }

    protected function validateRequest(Request $request): void
    {
        $this->validate($request, [
            'sekolah_minggu_id' => 'required',
            'tanggal' => 'required|date',
        ], [
            'sekolah_minggu_id.required' => 'Nama siswa wajib ada!',
            'tanggal.required' => 'Tanggal wajib diisi!',
            'tanggal.date' => 'Tanggal wajib berupa tanggal!',
        ]);
    }
}

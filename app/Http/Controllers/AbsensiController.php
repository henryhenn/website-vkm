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
            ->select('tanggal')
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

    public function show(string $date)
    {
        $absensi = $this->getAbsensi($date);

        return view('absensi.detail', compact('absensi'));
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);

        foreach ($request->get('sekolah_minggu_id') as $siswa) {
            Absensi::create([
                'sekolah_minggu_id' => $siswa,
                'tanggal' => $request->date('tanggal')
            ]);
        }

        return redirect()->route('absensi.index')->with('message', 'Absensi berhasil ditambahkan!');
    }

    public function edit(string $date)
    {
        $siswa = SekolahMinggu::query()
            ->with('absensi')
            ->select('id', 'nama')
            ->get();
//        $absen = Absensi::with('sekolahMinggu')->where('tanggal', $date)->get();

        return view('absensi.edit', compact('siswa'));
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

    public function getAbsensiByDate(string $date)
    {
        $absensi = $this->getAbsensi($date);

        return response()->json([
            'data' => $absensi,
            'status' => Response::HTTP_OK
        ]);
    }

    protected function getAbsensi(string $date): null|object
    {
        return Absensi::query()
            ->with('sekolahMinggu')
            ->where('tanggal', $date)
            ->get();
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

<?php

namespace App\Http\Controllers;

use App\Exports\FormatTableSekolahMingguExport;
use App\Http\Requests\SekolahMingguRequest;
use App\Imports\SekolahMingguImport;
use App\Models\Kelas;
use App\Models\SekolahMinggu;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class SekolahMingguController extends Controller
{
    public function index()
    {
        $this->middleware('permission:View Sekolah Minggu');

        $anak = DB::table('sekolah_minggu')
            ->orderBy('nama')
            ->select('sekolah_minggu.id', 'nama', 'telp', 'nama_ortu', 'sekolah_minggu.created_at', 'kelas_id', 'kelas.kelas', 'grup_kelas.grup_kelas')
            ->join('kelas', 'sekolah_minggu.kelas_id', 'kelas.id')
            ->join('grup_kelas', 'kelas.grup_kelas_id', 'grup_kelas.id')
            ->paginate(100);
        $kelas = DB::table('kelas')
            ->select('id', 'kelas')
            ->get();

        return $kelas->count() != 0 ? view('smb.index', compact('anak', 'kelas')) : to_route('grup-kelas.index')->with('error', 'Silakan tambahkan Kelas terlebih dulu!');
    }

    public function store(SekolahMingguRequest $request)
    {
        $this->middleware('permission:Create Sekolah Minggu');

        SekolahMinggu::create($request->validated());

        return back()->with('message', 'Data Sekolah Minggu berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $this->middleware('permission:View Sekolah Minggu');

        $sekolah_minggu = DB::table('sekolah_minggu')
            ->join('mst_value', 'sekolah_minggu.status_qiu_dao', '=', 'mst_value.id')
            ->join('kelas', 'sekolah_minggu.kelas_id', '=', 'kelas.id')
            ->select(
                'nama',
                'tgl_lahir',
                'alamat',
                'jenis_kelamin',
                'telp',
                'nama_ortu',
                'sekolah_minggu.user_add',
                'sekolah_minggu.user_update',
                'desc',
                'kelas',
                'sekolah_minggu.created_at',
                'sekolah_minggu.updated_at')
            ->first();

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

    public function export()
    {
        $this->middleware('permission:Create Sekolah Minggu');

        return Excel::download(new FormatTableSekolahMingguExport(), 'format-sekolah_minggu.xlsx');
    }

    public function import(Request $request)
    {
        $this->middleware('permission:Create Sekolah Minggu');

        $this->validate($request, [
            'file' => 'required|file|mimes:xls,xlsx,csv'
        ], [
            'file.required' => 'Input File wajib diisi!',
            'file.file' => 'Input File harus berupa file!',
            'file.mimes' => 'Input File harus berformat: .xlsx, .xls, .csv!',
        ]);

        try {
            Excel::import(new SekolahMingguImport(), $request->file('file'));

            return back()->with('message', 'Data Sekolah Minggu berhasil diimport!');
        } catch (\InvalidArgumentException $e) {
            return back()->withErrors('Ada error.');
        }
    }

    public function getAnakById(SekolahMinggu $anak)
    {
        return response()->json([
            'data' => $anak,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }
}

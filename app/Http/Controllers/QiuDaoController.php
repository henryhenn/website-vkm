<?php

namespace App\Http\Controllers;

use App\Exports\FormatTableQiuDaoExport;
use App\Http\Requests\QiuDaoRequest;
use App\Imports\QiuDaoImport;
use App\Models\QiuDao;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class QiuDaoController extends Controller
{
    public function index()
    {
        $this->middleware('permission:View Qiu Dao');

        $qiuDao = DB::table('qiudao')
            ->orderBy('nama_indo')
            ->paginate(100);

        return view('qiudao.index', compact('qiuDao'));
    }

    public function store(QiuDaoRequest $request)
    {
        $this->middleware('permission:Create Qiu Dao');

        QiuDao::create($request->validated());

        return back()->with('message', 'Data Qiu Dao berhasil ditambahkan!');
    }

    public function show(QiuDao $qiudao)
    {
        $this->middleware('permission:View Qiu Dao');

        return view('qiudao.detail', compact('qiudao'));
    }

    public function update(QiuDaoRequest $request, QiuDao $qiudao)
    {
        $this->middleware('permission:Edit Qiu Dao');

        $qiudao->update($request->validated());

        return back()->with('message', 'Data Qiu Dao berhasil diudpate!');
    }

    public function destroy(QiuDao $qiudao)
    {
        $this->middleware('permission:Delete Qiu Dao');

        $qiudao->delete();

        return back()->with('message', 'Data Qiu dao berhasil dihapus!');
    }

    public function export()
    {
        $this->middleware('permission:Create Qiu Dao');

        return Excel::download(new FormatTableQiuDaoExport, 'format-qiudao.xlsx');
    }

    public function import(Request $request)
    {
        $this->middleware('permission:Create Qiu Dao');

        $this->validate($request, [
            'file' => 'required|file|mimes:xls,xlsx,csv'
        ], [
            'file.required' => 'Input File wajib diisi!',
            'file.file' => 'Input File harus berupa file!',
            'file.mimes' => 'Input File harus berformat: .xlsx, .xls, .csv!',
        ]);

        try {
            Excel::import(new QiuDaoImport, $request->file('file'));

            return back()->with('message', 'Data Qiu Dao berhasil diimport!');
        } catch (\InvalidArgumentException $e) {
            return back()->withErrors('Ada error.');
        }
    }

    public function getQiuDaoById(QiuDao $qiudao)
    {
        return response()->json([
            'data' => $qiudao,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }
}

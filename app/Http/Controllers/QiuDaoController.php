<?php

namespace App\Http\Controllers;

use App\Http\Requests\QiuDaoRequest;
use App\Models\QiuDao;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

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

    public function getQiuDaoById(string $id)
    {
        $qiuDao = DB::table('qiudao')
            ->find($id);

        return response()->json([
            'data' => $qiuDao,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }
}

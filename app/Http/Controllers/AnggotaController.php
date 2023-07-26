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
            ->select('id', 'nama_indo', 'nama_mandarin_hanzi', 'nama_mandarin_pinyin', 'telp', 'active', 'created_at')
            ->paginate(100);

        return view('anggota.index', compact('anggota'));
    }

    public function store(AnggotaRequest $request)
    {
        User::query()
            ->create(array_merge(
                $request->validated(),
                ['user_add' => auth()->user()->username]
            ))
            ->assignRole('Member');

        return back()->with('message', 'Anggota berhasil ditambahkan!');
    }

    public function show(string $id)
    {
        $anggota = User::findOrFail($id);

        return view('anggota.detail', compact('anggota'));
    }

    public function update(AnggotaRequest $request, string $id)
    {
        $user = User::query()->findOrFail($id);

        $user->update([
            'username' => $request->get('username'),
            'active' => 1,
            'password' => $request->get('password')
        ]);

        $user->syncRole('User');

        return back()->with('message', 'Akun berhasil dibuatkan!');
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

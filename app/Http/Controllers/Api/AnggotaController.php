<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AnggotaController extends Controller
{
    public function getAllData()
    {
        $anggota = DB::table('users')
            ->orderBy('nama_indo')
            ->get();

        return response()->json([
            'data' => $anggota,
            'status' => Response::HTTP_OK
        ]);
    }
}

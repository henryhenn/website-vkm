<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $kebaktian = DB::table('mst_value')
            ->where('kondisi', 'like', '%' . 'Kebaktian' .'%')
            ->get();
        $anggota = DB::table('users')
            ->whereDate('created_at', '<=', today())
            ->take(5)
            ->get();

        return view('dashboard.index', compact('kebaktian', 'anggota'));
    }
}

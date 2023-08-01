<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function __invoke()
    {
        $acara = DB::table('acara')
            ->select('acara', 'tgl', 'tempat', 'image', 'jam_mulai', 'jam_selesai')
            ->whereDate('tgl', '>=', today()->format('Y-m-d'))
            ->where('active', 1)
            ->take(3)
            ->get();

        $kebaktian = DB::table('mst_value')
            ->select('kondisi', 'desc')
            ->where('kondisi', 'like', '%kebaktian%')
            ->where('active', 1)
            ->get();

        return view('landing', compact('acara', 'kebaktian'));
    }
}

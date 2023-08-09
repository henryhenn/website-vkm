<?php

namespace App\Helpers;

use App\Models\Menu;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

function convert_date(string $date): string
{
    $tgl = new Carbon($date);

    return $tgl->format('Y-m-d');
}

function convert_date_to_time(string $date): string
{
    $tgl = new Carbon($date);

    return $tgl->format('H:i');
}

function getMenus()
{
    return Menu::query()
        ->with(['subMenus' => function ($query) {
            $query->whereHas('permissions', function ($query) {
                $query->where('name', 'like', '%View%')->whereHas('users', function ($query) {
                    $query->where('model_id', auth()->id());
                });
            });
        }])
        ->orderBy('menu')
        ->get();
}

function tgl_indo($tanggal)
{
    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    return $pecahkan[2] . '-' . $bulan[(int)$pecahkan[1]] . '-' . $pecahkan[0];
}

function hari_tanggal($tanggal)
{
    $date = date('D');

    switch ($date) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }

    $bulan = array(
        1 => 'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    return $hari_ini . ', ' . $pecahkan[2] . '-' . $bulan[(int)$pecahkan[1]] . '-' . $pecahkan[0];
}

function count_data($value) {
    return DB::table('users')
        ->where('status_ketuhanan', 'like', '%' . $value . '%')
        ->count();
}

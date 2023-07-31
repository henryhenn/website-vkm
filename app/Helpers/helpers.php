<?php

namespace App\Helpers;

use App\Models\Menu;
use Carbon\Carbon;

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

<?php

namespace App\Helpers;

use Carbon\Carbon;

if (!function_exists('convert_date')) {
    function convert_date(string $date): string
    {
        $tgl = new Carbon($date);

        return $tgl->format('d M Y');
    }
}

if (!function_exists('convert_date_with_time')) {
    function convert_date_with_time(string $date): string
    {
        $tgl = new Carbon($date);

        return $tgl->format('d M Y | H:i');
    }
}

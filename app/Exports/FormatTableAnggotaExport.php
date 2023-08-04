<?php

namespace App\Exports;


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class FormatTableAnggotaExport implements FromView
{
    public function view(): View
    {
        return view('anggota.export-format');
    }

}

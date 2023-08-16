<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;

class FormatTableSekolahMingguExport implements FromView
{

    public function view(): \Illuminate\Contracts\View\View
    {
        return view('smb.export-format');
    }
}

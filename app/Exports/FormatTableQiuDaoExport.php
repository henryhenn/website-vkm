<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromView;

class FormatTableQiuDaoExport implements FromView
{
    public function view(): \Illuminate\Contracts\View\View
    {
        return view('qiudao.export-format');
    }
}

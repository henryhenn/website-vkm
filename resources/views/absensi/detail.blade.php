@php use function App\Helpers\convert_date;use function App\Helpers\tgl_indo; @endphp

@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Detail Absensi'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Detail
                        Absensi: {{tgl_indo(convert_date($absensi->tanggal))}}</h5>

                    <div class="row mt-3">
                        <div class="table-responsive">
                            <table class="display" id="detailAbsensiTable" width="100%">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($absensi->sekolahMinggu as $data)
                                    <tr>
                                        <td>{{$data->nama}}</td>
                                        <td>
                                            <input type="checkbox" name="sekolah_minggu_id[]" id="sekolah_minggu_id[]"
                                                   class="input-check" checked readonly>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            new DataTable("#detailAbsensiTable")
        })
    </script>
@endpush

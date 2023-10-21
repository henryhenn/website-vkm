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
                        Absensi: {{tgl_indo(convert_date($absensi->first()->tanggal))}}</h5>

                    <div class="row mt-3">
                        <div class="table-responsive">
                            <table class="display" id="detailAbsensiTable" width="100%">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($absensi as $data)
                                    <tr>
                                        <td>{{$data->sekolahMinggu->nama}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('Delete Absensi')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteAbsensiModal"
                                                            onclick="getAbsensiByDate('delete', {{$data->sekolahMinggu->id}})"
                                                            class="badge bg-label-danger cursor-pointer border-0">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                @endcan
                                            </div>
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

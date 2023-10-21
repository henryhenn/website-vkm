@php use function App\Helpers\convert_date;use function App\Helpers\convert_date_to_time;use function App\Helpers\tgl_indo; @endphp
@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Daftar Absensi'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Daftar Absensi</h5>
                        <a
                            href="{{route('absensi.create')}}"
                            class="btn btn-primary"
                        >
                            Tambah Absensi Baru
                        </a>
                    </div>

                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="display" id="absensiTable" width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($absensi as $key => $data)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{tgl_indo(convert_date($data->tanggal))}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('View Absensi')
                                                    <a href="{{route('absensi.show', $data->tanggal)}}"
                                                       class="badge bg-label-primary">
                                                        <i class="bx bx-show"></i>
                                                    </a>
                                                @endcan
                                                @can('Edit Absensi')
                                                    <a href="{{route('absensi.edit', $data->tanggal)}}"
                                                       class="badge bg-label-warning mx-2">
                                                        <i class="bx bx-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('Delete Absensi')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteAbsensiModal"
                                                            onclick="getAbsensiByDate('{{$data->tanggal}}')"
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

    @can('Delete Absensi')
        <div class="modal fade" id="deleteAbsensiModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data Absensi Tanggal: <span id="tglAbsensi"></span></h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <h4>Apakah Anda Yakin?</h4>
                                <p> Data yang Sudah Dihapus Tidak Bisa Dikembalikan!</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <form action="" method="post" id="deleteForm">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Yakin</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/viewAbsensiScript.js')}}"></script>
@endpush

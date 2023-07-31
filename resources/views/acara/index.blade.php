@php use function App\Helpers\convert_date;use function App\Helpers\convert_date_to_time;use function App\Helpers\tgl_indo; @endphp
@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Daftar Acara'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Daftar Acara</h5>
                        <button
                            type="button"
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#tambahAcaraModal"
                        >
                            Tambah Acara Baru
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="tambahAcaraModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Tambah Acara Baru</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <form action="{{route('acara.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="acara"
                                                            name="acara"
                                                            value="{{old('acara')}}"
                                                            placeholder=" "
                                                            aria-describedby="acara"
                                                        />
                                                        <label for="acara">Acara</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="date"
                                                            class="form-control"
                                                            id="tgl"
                                                            name="tgl"
                                                            value="{{old('tgl')}}"
                                                            placeholder=" "
                                                            aria-describedby="tgl"
                                                        />
                                                        <label for="tgl">Tanggal</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="tempat"
                                                            name="tempat"
                                                            value="{{old('tempat')}}"
                                                            placeholder=" "
                                                            aria-describedby="tempat"
                                                        />
                                                        <label for="tempat">Tempat</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div>
                                                        <label for="image" class="form-label">Gambar</label>
                                                        <input class="form-control" name="image" type="file"
                                                               id="image"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-dismiss="modal">
                                                Batal
                                            </button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="display" id="acaraTable" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Acara</th>
                                    <th>Aktif</th>
                                    <th>Dibuat pada</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($acara as $acara)
                                    <tr>
                                        <td>{{$acara->id}}</td>
                                        <td>{{$acara->acara}}</td>
                                        <td>
                                            <form action="{{route('acara_active.update', $acara->id)}}"
                                                  method="post" id="update-active">
                                                @csrf
                                                @method('put')
                                                <div class="form-check form-switch mb-2">
                                                    <input class="form-check-input"
                                                           name="active"
                                                           value="{{$acara->active ? 0 : 1}}"
                                                           onclick="$('#update-active').submit()"
                                                           @checked($acara->active) type="checkbox"
                                                           id="active"/>
                                                </div>
                                            </form>
                                        </td>
                                        <td>{{tgl_indo(convert_date($acara->created_at)) . ' | ' .  convert_date_to_time($acara->created_at)}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('View Acara')
                                                    <a href="{{route('acara.show', $acara->id)}}"
                                                       class="badge bg-label-primary">
                                                        <i class="bx bx-show"></i>
                                                    </a>
                                                @endcan
                                                @can('Edit Acara')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            onclick="getAcaraById('edit', {{$acara->id}})"
                                                            data-bs-target="#editAcaraModal"
                                                            class="badge mx-2 bg-label-warning cursor-pointer border-0">
                                                        <i class="bx bx-edit"></i>
                                                    </button>
                                                @endcan
                                                @can('Delete Acara')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteAcaraModal"
                                                            onclick="getAcaraById('delete', {{$acara->id}})"
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

    <div class="modal fade" id="editAcaraModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Edit Acara: <span id="editModalTitle"></span></h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form action="" method="post" enctype="multipart/form-data" id="edit-form">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="acara"
                                        name="acara"
                                        value="{{old('acara')}}"
                                        placeholder=" "
                                        aria-describedby="acara"
                                    />
                                    <label for="acara">Acara</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="tgl"
                                        name="tgl"
                                        value="{{old('tgl')}}"
                                        placeholder=" "
                                        aria-describedby="tgl"
                                    />
                                    <label for="tgl">Tanggal</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="tempat"
                                        name="tempat"
                                        value="{{old('tempat')}}"
                                        placeholder=" "
                                        aria-describedby="tempat"
                                    />
                                    <label for="tempat">Tempat</label>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div>
                                    <label for="image" class="form-label">Gambar</label>
                                    <input class="form-control" name="image" type="file"
                                           id="image"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteAcaraModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data: <span id="acaraName"></span></h5>
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
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/viewAcaraScript.js')}}"></script>
@endpush

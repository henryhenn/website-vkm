@php use function App\Helpers\convert_date;use function App\Helpers\convert_date_to_time;use function App\Helpers\tgl_indo; @endphp
@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Daftar Grup Kelas'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Daftar Grup Kelas</h5>
                        <button
                            type="button"
                            class="btn btn-primary me-2"
                            data-bs-toggle="modal"
                            data-bs-target="#tambahGrupKelasModal"
                        >
                            Tambah Data
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="tambahGrupKelasModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Tambah Data Grup Kelas Baru</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <form action="{{route('grup-kelas.store')}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div id="new-row">
                                                <div class="row">
                                                    <div class="col mb-3" id="grup-kelas-row">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control grup_kelas" required
                                                                   name="grup_kelas[]"
                                                                   id="grup_kelas"
                                                                   placeholder="Nama Grup Kelas">
                                                            <button class="btn btn-danger" id="delete-create-row"
                                                                    type="button">
                                                                -
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-success" type="button" id="add-create-row">Tambah
                                                grup kelas
                                            </button>
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
                            <table class="display" id="grupKelasTable" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Grup Kelas</th>
                                    <th>Dibuat pada</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($grup_kelas as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->grup_kelas}}</td>
                                        <td>{{tgl_indo(convert_date($data->created_at))}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('View Grup Kelas')
                                                    <a href="{{route('grup-kelas.show', $data->id)}}"
                                                            class="badge bg-label-primary cursor-pointer border-0">
                                                        <i class="bx bx-show"></i>
                                                    </a>
                                                @endcan
                                                    @can('Edit Grup Kelas')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            onclick="getGrupKelasById('edit', {{$data->id}})"
                                                            data-bs-target="#editGrupKelasModal"
                                                            class="badge mx-2 bg-label-warning cursor-pointer border-0">
                                                        <i class="bx bx-edit"></i>
                                                    </button>
                                                @endcan
                                                @can('Delete Grup Kelas')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteGrupKelasModal"
                                                            onclick="getGrupKelasById('delete', {{$data->id}})"
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

    <div class="modal fade" id="deleteGrupKelasModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data: <span id="grupKelasName"></span></h5>
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

    <div class="modal fade" id="editGrupKelasModal" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit
                        Data: <span id="editFormTitle"></span></h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form action="" method="post" id="edit-grup-kelas-form">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="grup_kelas"
                                        name="grup_kelas"
                                        placeholder=" "
                                        aria-describedby="grup_kelas"
                                    />
                                    <label for="grup_kelas">Grup Kelas</label>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
                <div class="d-flex mt-2 ms-2">
                    <p>Ditambahkan oleh: <span class="fw-bold" id="user_add"></span></p>
                    <p class="mx-3">Diupdate oleh: <span class="fw-bold" id="user_update"></span></p>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/viewGrupKelasScript.js')}}"></script>
@endpush

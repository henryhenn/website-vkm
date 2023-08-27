@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Daftar Kelas'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Daftar Kelas</h5>

                        @can('Control Grup Kelas')
                            <button
                                type="button"
                                class="btn btn-primary me-2"
                                data-bs-toggle="modal"
                                data-bs-target="#tambahKelasModal"
                            >
                                Tambah Data
                            </button>
                        @endcan
                    </div>

                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="table table-responsive" id="kelasTable" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($grup_kela->kelas as $kelas)
                                    <tr>
                                        <td>{{$kelas->id}}</td>
                                        <td>{{$kelas->kelas}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('Control Grup Kelas')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            onclick="getKelasById('edit', {{$kelas->id}})"
                                                            data-bs-target="#editKelasModal"
                                                            class="badge mx-2 bg-label-warning cursor-pointer border-0">
                                                        <i class="bx bx-edit"></i>
                                                    </button>
                                                @endcan
                                                @can('Control Grup Kelas')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteKelasModal"
                                                            onclick="getKelasById('delete', {{$kelas->id}})"
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

    @can('Control Grup Kelas')
        <div class="modal fade" id="tambahKelasModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Tambah Data Kelas untuk Grup: {{$grup_kela->grup_kelas}}</h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>
                    </div>
                    <form action="{{route('kelas.store')}}" method="post" id="create-kelas-form">
                        @csrf
                        <input type="hidden" id="grup_kelas_id" name="grup_kelas_id" value="{{$grup_kela->id}}">
                        <div class="modal-body">
                            <div id="new-row">
                                <div class="row">
                                    <div class="col mb-3" id="kelas-row">
                                        <div class="input-group">
                                            <input type="text" class="form-control kelas" required name="kelas[]"
                                                   id="kelas"
                                                   placeholder="Nama Kelas">
                                            <button class="btn btn-danger" id="delete-create-row" type="button">
                                                -
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success" type="button" id="add-create-row">Tambah kelas</button>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                    data-bs-dismiss="modal">
                                Batal
                            </button>
                            <button type="submit" class="btn btn-primary" id="submit-create-form">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endcan

    @can('Control Grup Kelas')
        <div class="modal fade" id="deleteKelasModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data: <span id="kelasName"></span></h5>
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

    @can('Control Grup Kelas')
        <div class="modal fade" id="editKelasModal" tabindex="-1"
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
                    <form action="" method="post" id="edit-kelas-form">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="kelas"
                                            required
                                            name="kelas"
                                            placeholder=" "
                                            aria-describedby="kelas"
                                        />
                                        <label for="kelas"> Kelas</label>

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
    @endcan

@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="{{asset('js/viewKelasScript.js')}}"></script>
@endpush

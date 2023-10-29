@php use function App\Helpers\convert_date;use function App\Helpers\convert_date_to_time;use function App\Helpers\tgl_indo; @endphp
@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Daftar Anak SMB'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Daftar Anak Sekolah Minggu</h5>
                        @can('Create Sekolah Minggu')
                            <div class="d-flex">
                                <button
                                    type="button"
                                    class="btn btn-primary me-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#tambahSMBModal"
                                >
                                    Tambah Data
                                </button>
                                <button
                                    type="button"
                                    class="btn btn-success"
                                    data-bs-toggle="modal"
                                    data-bs-target="#importSMBModal"
                                >
                                    Import
                                </button>
                            </div>
                        @endcan

                        @can('Create Sekolah Minggu')
                            <!-- Modal -->
                            <div class="modal fade" id="tambahSMBModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Tambah Data Sekolah Minggu
                                                Baru</h5>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <form action="{{route('sekolah-minggu.store')}}" method="post">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="nama"
                                                                name="nama"
                                                                value="{{old('nama')}}"
                                                                placeholder=" "
                                                                aria-describedby="nama"
                                                            />
                                                            <label for="nama">Nama Lengkap</label>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="form-floating">
                                                            <input
                                                                type="date"
                                                                class="form-control"
                                                                id="tgl_lahir"
                                                                name="tgl_lahir"
                                                                value="{{old('tgl_lahir')}}"
                                                                placeholder=" "
                                                                aria-describedby="tgl_lahir"
                                                            />
                                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <label for="jenis_kelamin" class="d-block">Jenis Kelamin</label>
                                                        <div class="mt-2 d-flex">
                                                            <div class="me-3">
                                                                <input
                                                                    class="form-check-input mt-0"
                                                                    type="radio"
                                                                    name="jenis_kelamin"
                                                                    value="Laki-laki"
                                                                />
                                                                <span>Laki-laki</span>
                                                            </div>
                                                            <div>
                                                                <input
                                                                    class="form-check-input mt-0"
                                                                    type="radio"
                                                                    name="jenis_kelamin"
                                                                    value="Perempuan"
                                                                />
                                                                <span>Perempuan</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="form-floating">
                                                <textarea
                                                    class="form-control"
                                                    id="alamat"
                                                    name="alamat"
                                                    placeholder=" "
                                                    aria-describedby="alamat"
                                                >{{old('alamat')}}</textarea>
                                                            <label for="alamat">Alamat</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="telp"
                                                                name="telp"
                                                                placeholder=" "
                                                                value="{{old('telp')}}"
                                                                aria-describedby="telp"
                                                            >
                                                            <label for="telp">No. Telepon</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <select
                                                            class="form-control"
                                                            id="kelas_id"
                                                            name="kelas_id"
                                                        >
                                                            <option value="" disabled selected>--KELAS--</option>
                                                            @forelse($kelas as $kelas)
                                                                <option
                                                                    value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                                                            @empty
                                                                <option disabled>Tidak ada data kelas.</option>
                                                            @endforelse
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <div class="form-floating">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="nama_ortu"
                                                                name="nama_ortu"
                                                                placeholder=" "
                                                                value="{{old('nama_ortu')}}"
                                                                aria-describedby="nama_ortu"
                                                            >
                                                            <label for="nama_ortu">Nama Orang Tua</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-3">
                                                        <select
                                                            class="form-control"
                                                            id="status_qiu_dao"
                                                            name="status_qiu_dao"
                                                            aria-describedby="status_qiu_dao"
                                                        >
                                                            <option value="" disabled selected>--STATUS QIU DAO--
                                                            </option>
                                                        </select>
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

                            <div class="modal fade" id="importSMBModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalCenterTitle">Import Data Sekolah Mingu dari
                                                Excel</h5>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <form action="{{route('sekolah-minggu.import')}}" method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class=" col mb-3">
                                                        <a href="{{route('sekolah-minggu.export-format')}}"
                                                           class="btn btn-primary">Download Format Excel</a>
                                                    </div>
                                                </div>
                                                <div class="row col">
                                                    <div class="mb-3">
                                                        <label for="file" class="form-label">Import Data Anggota dari
                                                            Excel</label>
                                                        <input class="form-control" name="file" type="file" id="file"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                    Batal
                                                </button>
                                                <button type="submit" class="btn btn-success">Import</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endcan
                    </div>

                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="display" id="smbTable" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Lengkap</th>
                                    <th>No. Telepon</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Kelas</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($anak as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->telp}}</td>
                                        <td>{{$data->nama_ortu}}</td>
                                        <td>{{$data->kelas . " ($data->grup_kelas)"}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('View Sekolah Minggu')
                                                    <a href="{{route('sekolah-minggu.show', $data->id)}}"
                                                       class="badge bg-label-primary">
                                                        <i class="bx bx-show"></i>
                                                    </a>
                                                @endcan
                                                @can('Edit Sekolah Minggu')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            onclick="getAnakById('edit', {{$data->id}})"
                                                            data-bs-target="#editSMBModal"
                                                            class="badge mx-2 bg-label-warning cursor-pointer border-0">
                                                        <i class="bx bx-edit"></i>
                                                    </button>
                                                @endcan
                                                @can('Delete Sekolah Minggu')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteSMBModal"
                                                            onclick="getAnakById('delete', {{$data->id}})"
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

    @can('Delete Sekolah Minggu')
        <div class="modal fade" id="deleteSMBModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Hapus Data: <span id="anakName"></span></h5>
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

    @can('Edit Sekolah Minggu')
        <div class="modal fade" id="editSMBModal" tabindex="-1"
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
                    <form action="" method="post" id="edit-anggota-form">
                        @csrf
                        @method('put')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nama"
                                            name="nama"
                                            value="{{old('nama')}}"
                                            placeholder=" "
                                            aria-describedby="nama"
                                        />
                                        <label for="nama">Nama Lengkap</label>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="form-floating">
                                        <input
                                            type="date"
                                            class="form-control"
                                            id="tgl_lahir"
                                            name="tgl_lahir"
                                            value="{{old('tgl_lahir')}}"
                                            placeholder=" "
                                            aria-describedby="tgl_lahir"
                                        />
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="form-floating">
                                    <textarea
                                        class="form-control"
                                        id="alamat"
                                        name="alamat"
                                        placeholder=" "
                                        aria-describedby="alamat"
                                    >{{old('alamat')}}</textarea>
                                        <label for="alamat">Alamat</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="telp"
                                            name="telp"
                                            placeholder=" "
                                            value="{{old('telp')}}"
                                            aria-describedby="telp"
                                        >
                                        <label for="telp">No. Telepon</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <select
                                        class="form-control"
                                        id="kelas_id"
                                        name="kelas_id"
                                    >
                                        <option value="" disabled selected>--KELAS--</option>
                                        <option value="{{$kelas->id}}">{{$kelas->kelas}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="nama_ortu"
                                            name="nama_ortu"
                                            placeholder=" "
                                            value="{{old('nama_ortu')}}"
                                            aria-describedby="nama_ortu"
                                        >
                                        <label for="nama_ortu">Nama Orang Tua</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <select
                                        class="form-control"
                                        id="status_qiu_dao"
                                        name="status_qiu_dao"
                                        aria-describedby="status_qiu_dao"
                                    >
                                        <option value="" disabled selected>--STATUS QIU DAO--</option>
                                    </select>
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
                    <div class="d-flex mt-4 ms-2">
                        <p>Ditambahkan oleh: <span class="fw-bold" id="user_add"></span></p>
                        <p class="mx-3">Diupdate oleh: <span class="fw-bold" id="user_update"></span></p>
                        <p>Dibuat pada: <span class="fw-bold" id="created_at"></span></p>
                    </div>
                </div>
            </div>
        </div>
    @endcanany

@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/viewSMBScript.js')}}"></script>
@endpush

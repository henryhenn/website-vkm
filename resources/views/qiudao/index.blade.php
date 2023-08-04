@php use function App\Helpers\convert_date;use function App\Helpers\convert_date_to_time;use function App\Helpers\tgl_indo; @endphp
@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Data Qiu Dao'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Data Qiu Dao</h5>
                        @can('Create Qiu Dao')
                            <div class="d-flex">

                                <button
                                    type="button"
                                    class="btn btn-primary me-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#tambahQiuDaoModal
                            "
                                >
                                    Tambah Data Qiu Dao Baru
                                </button>

                                <button
                                    type="button"
                                    class="btn btn-success"
                                    data-bs-toggle="modal"
                                    data-bs-target="#importQiuDaoModal"
                                >
                                    Import
                                </button>
                            </div>
                        @endcan

                        <!-- Modal -->
                        <div class="modal fade" id="tambahQiuDaoModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Tambah Qiu Dao Baru</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <form action="{{route('qiudao.store')}}" method="post">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="number"
                                                            class="form-control"
                                                            id="no_urut"
                                                            name="no_urut"
                                                            placeholder=" "
                                                            aria-describedby="no_urut"
                                                        />
                                                        <label for="no_urut">No. Urut</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="nama_indo"
                                                            name="nama_indo"
                                                            placeholder=" "
                                                            aria-describedby="nama_indo"
                                                        />
                                                        <label for="nama_indo">Nama Indonesia</label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="nama_mandarin_hanzi"
                                                            name="nama_mandarin_hanzi"
                                                            placeholder=" "
                                                            aria-describedby="nama_mandarin_hanzi"
                                                        />
                                                        <label for="nama_mandarin_hanzi">Nama Mandarin (Hanzi)</label>
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="nama_mandarin_pinyin"
                                                            name="nama_mandarin_pinyin"
                                                            placeholder=" "
                                                            aria-describedby="nama_mandarin_pinyin"
                                                        />
                                                        <label for="nama_mandarin_pinyin">Nama Mandarin (Pinyin)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="date"
                                                            class="form-control"
                                                            id="tgl_indo"
                                                            name="tgl_indo"
                                                            placeholder=" "
                                                            aria-describedby="tgl_indo"
                                                        />
                                                        <label for="tgl_indo">Tanggal Indonesia</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <select name="bln_imlek" id="bln_imlek"
                                                            class="form-control">
                                                        <option value="" disabled selected>--BULAN IMLEK--</option>
                                                        @for($i = 1; $i <= 12; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                                <div class="col mb-3">
                                                    <select name="tgl_imlek" id="tgl_imlek"
                                                            class="form-control">
                                                        <option value="" disabled selected>--TANGGAL IMLEK--</option>
                                                        @for($i = 1; $i <= 31; $i++)
                                                            <option value="{{$i}}">{{$i}}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input" value="Pria"
                                                                   name="jenis_kelamin"
                                                                   id="jenis_kelamin"/>
                                                            <label class="form-check-label" for="jenis_kelamin">
                                                                Pria </label>
                                                        </div>
                                                        <div class="form-check mx-2">
                                                            <input type="radio" class="form-check-input" value="Wanita"
                                                                   name="jenis_kelamin"
                                                                   id="jenis_kelamin"/>
                                                            <label class="form-check-label" for="jenis_kelamin">
                                                                Wanita </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input type="radio" class="form-check-input"
                                                                   value="Anak Laki" name="jenis_kelamin"
                                                                   id="jenis_kelamin"/>
                                                            <label class="form-check-label" for="jenis_kelamin">
                                                                Anak Laki </label>
                                                        </div>
                                                        <div class="form-check ms-2">
                                                            <input type="radio" class="form-check-input"
                                                                   value="Anak Perempuan" name="jenis_kelamin"
                                                                   id="jenis_kelamin"/>
                                                            <label class="form-check-label" for="jenis_kelamin">
                                                                Anak Perempuan </label>
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
                                                ></textarea>
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
                                                            aria-describedby="telp"
                                                        >
                                                        <label for="telp">No. Telepon</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="pengajak"
                                                            name="pengajak"
                                                            placeholder=" "
                                                            aria-describedby="pengajak"
                                                        />
                                                        <label for="pengajak">YinShi (Pengajak)</label>
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="penanggung"
                                                            name="penanggung"
                                                            placeholder=" "
                                                            aria-describedby="penanggung"
                                                        />
                                                        <label for="penanggung">BaoShi (Penanggung)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="pandita"
                                                            name="pandita"
                                                            placeholder=" "
                                                            aria-describedby="pandita"
                                                        />
                                                        <label for="pandita">DianChuanShi (Pandita)</label>
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="number"
                                                            class="form-control"
                                                            id="amal"
                                                            name="amal"
                                                            placeholder=" "
                                                            aria-describedby="amal"
                                                        />
                                                        <label for="amal">Amal</label>
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

                        <div class="modal fade" id="importQiuDaoModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Import Anggota dari Excel</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <form action="{{route('qiudao.import')}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class=" col mb-3">
                                                    <a href="{{route('qiudao.export-format')}}" class="btn btn-primary">Download
                                                        Format Excel</a>
                                                </div>
                                            </div>
                                            <div class="row col">
                                                <div class="mb-3">
                                                    <label for="file" class="form-label">Import Data Qiu Dao dari
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
                    </div>

                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                    <div class="row mt-4">
                        <div class="table-responsive">
                            <table class="display" id="qiuDaoTable" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Nama Mandarin</th>
                                    <th>Tanggal Indonesia</th>
                                    <th>Tanggal Imlek</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($qiuDao as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->nama_indo}}</td>
                                        <td>
                                            <span class="text-mandarin fs-5">{{$data->nama_mandarin_hanzi}}</span>
                                            <span class="d-block">{{$data->nama_mandarin_pinyin}}</span>
                                        </td>
                                        <td>{{tgl_indo(convert_date($data->tgl_indo))}}</td>
                                        <td>{{'Bulan: ' . $data->bln_imlek . ' | ' . 'Tanggal: ' . $data->tgl_imlek}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @can('View Qiu Dao')
                                                    <a href="{{route('qiudao.show', $data->id)}}"
                                                       class="badge bg-label-primary">
                                                        <i class="bx bx-show"></i>
                                                    </a>
                                                @endcan
                                                @can('Edit Qiu Dao')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            onclick="getQiuDaoById('edit', {{$data->id}})"
                                                            data-bs-target="#editQiuDaoModal"
                                                            class="badge mx-2 bg-label-warning cursor-pointer border-0">
                                                        <i class="bx bx-edit"></i>
                                                    </button>
                                                @endcan
                                                @can('Delete Qiu Dao')
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteQiuDaoModal"
                                                            onclick="getQiuDaoById('delete', {{$data->id}})"
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

    <div class="modal fade" id="editQiuDaoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Edit Data Qiu Dao: <span id="editModalTitle"></span>
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form action="" method="post" id="edit-form">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="no_urut"
                                        name="no_urut"
                                        placeholder=" "
                                        aria-describedby="no_urut"
                                    />
                                    <label for="no_urut">No. Urut</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nama_indo"
                                        name="nama_indo"
                                        placeholder=" "
                                        aria-describedby="nama_indo"
                                    />
                                    <label for="nama_indo">Nama Indonesia</label>

                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nama_mandarin_hanzi"
                                        name="nama_mandarin_hanzi"
                                        placeholder=" "
                                        aria-describedby="nama_mandarin_hanzi"
                                    />
                                    <label for="nama_mandarin_hanzi">Nama Mandarin (Hanzi)</label>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nama_mandarin_pinyin"
                                        name="nama_mandarin_pinyin"
                                        placeholder=" "
                                        aria-describedby="nama_mandarin_pinyin"
                                    />
                                    <label for="nama_mandarin_pinyin">Nama Mandarin (Pinyin)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="tgl_indo"
                                        name="tgl_indo"
                                        placeholder=" "
                                        aria-describedby="tgl_indo"
                                    />
                                    <label for="tgl_indo">Tanggal Indonesia</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <select name="bln_imlek" id="bln_imlek"
                                        class="form-control">
                                    <option value="" disabled>--BULAN IMLEK--</option>
                                    @for($i = 1; $i <= 12; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col mb-3">
                                <select name="tgl_imlek" id="tgl_imlek"
                                        class="form-control">
                                    <option value="" disabled>--TANGGAL IMLEK--</option>
                                    @for($i = 1; $i <= 31; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" value="Pria" name="jenis_kelamin"
                                               id="jenis_kelamin"/>
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Pria </label>
                                    </div>
                                    <div class="form-check mx-2">
                                        <input type="radio" class="form-check-input" value="Wanita" name="jenis_kelamin"
                                               id="jenis_kelamin"/>
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Wanita </label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" value="Anak Laki"
                                               name="jenis_kelamin"
                                               id="jenis_kelamin"/>
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Anak Laki </label>
                                    </div>
                                    <div class="form-check ms-2">
                                        <input type="radio" class="form-check-input" value="Anak Perempuan"
                                               name="jenis_kelamin"
                                               id="jenis_kelamin"/>
                                        <label class="form-check-label" for="jenis_kelamin">
                                            Anak Perempuan </label>
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
                                        aria-describedby="alamat"></textarea>
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
                                        aria-describedby="telp"
                                    >
                                    <label for="telp">No. Telepon</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="pengajak"
                                        name="pengajak"
                                        placeholder=" "
                                        aria-describedby="pengajak"
                                    />
                                    <label for="pengajak">YinShi (Pengajak)</label>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="penanggung"
                                        name="penanggung"
                                        placeholder=" "
                                        aria-describedby="penanggung"
                                    />
                                    <label for="penanggung">BaoShi (Penanggung)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="pandita"
                                        name="pandita"
                                        placeholder=" "
                                        aria-describedby="pandita"
                                    />
                                    <label for="pandita">DianChuanShi (Pandita)</label>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="number"
                                        class="form-control"
                                        id="amal"
                                        name="amal"
                                        placeholder=" "
                                        aria-describedby="amal"
                                    />
                                    <label for="amal">Amal</label>
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

    <div class="modal fade" id="deleteQiuDaoModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data Qiu Dao: <span id="qiuDaoName"></span></h5>
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
    <script src="{{asset('js/viewQiuDaoScript.js')}}"></script>
@endpush

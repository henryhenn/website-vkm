@php use function App\Helpers\convert_date;use function App\Helpers\convert_date_with_time; @endphp
@extends('layouts.app', ['title' => 'Daftar Anggota'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Daftar Anggota</h5>
                        <button
                            type="button"
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target="#tambahAnggotaModal"
                        >
                            Tambah Anggota Baru
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="tambahAnggotaModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Tambah Anggota Baru</h5>
                                        <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"
                                        ></button>
                                    </div>
                                    <form action="{{route('anggota.store')}}" method="post" id="anggota-form">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="nama_indo"
                                                            name="nama_indo"
                                                            value="{{old('nama_indo')}}"
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
                                                            value="{{old('nama_mandarin_hanzi')}}"
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
                                                            value="{{old('nama_mandarin_pinyin')}}"
                                                            placeholder=" "
                                                            aria-describedby="nama_mandarin_pinyin"
                                                        />
                                                        <label for="nama_mandarin_pinyin">Nama Mandarin (Pinyin)</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="tempat_lahir"
                                                            name="tempat_lahir"
                                                            value="{{old('tempat_lahir')}}"
                                                            placeholder=" "
                                                            aria-describedby="tempat_lahir"
                                                        />
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                    </div>
                                                </div>
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
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <select
                                                        class="form-control"
                                                        id="gol_darah"
                                                        name="gol_darah"
                                                        aria-describedby="gol_darah"
                                                    >
                                                        <option value="" disabled selected>--GOL DARAH--</option>
                                                    </select>
                                                </div>
                                                <div class="col mb-3">
                                                    <select
                                                        class="form-control"
                                                        id="status_ketuhanan"
                                                        name="status_ketuhanan"
                                                        aria-describedby="status_ketuhanan"
                                                    >
                                                        <option value="" disabled selected>--STATUS KETUHANAN--</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <select
                                                        class="form-control"
                                                        id="status_vegetarian"
                                                        name="status_vegetarian"
                                                        aria-describedby="status_vegetarian"
                                                    >
                                                        <option value="" disabled selected>--STATUS VEGETARIAN--
                                                        </option>
                                                    </select>
                                                </div>
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
                            <table class="display" id="anggotaTable" width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama Anggota</th>
                                    <th>Nama Anggota (Mandarin)</th>
                                    <th>No. Telepon</th>
                                    <th>Aktif</th>
                                    <th>Dibuat pada</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($anggota as $data)
                                    <tr>
                                        <td id="anggotaId">{{$data->id}}</td>
                                        <td>{{$data->nama_indo}}</td>
                                        <td>
                                            {{$data->nama_mandarin_hanzi}}
                                            <p>{{$data->nama_mandarin_pinyin}}</p>
                                        </td>
                                        <td>{{$data->telp}}</td>
                                        <td>
                                            <span
                                                class="badge bg-label-{{$data->active ? 'success' : 'danger'}}">{{$data->active ? 'Aktif' : 'Non-aktif'}}</span>
                                        </td>
                                        <td>{{convert_date_with_time($data->created_at)}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @if(!$data->active)
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#anggotaModal"
                                                            onclick="getAnggotaById('add', {{$data->id}})"
                                                            class="badge bg-label-success me-2 cursor-pointer border-0">
                                                        <i class="bx bx-user-plus"></i>
                                                    </button>
                                                @endif
                                                <a href="{{route('anggota.show', $data->id)}}"
                                                   class="badge bg-label-primary">
                                                    <i class="bx bx-show"></i>
                                                </a>
                                                <button id="showModal"
                                                        data-bs-toggle="modal"
                                                        onclick="getAnggotaById('edit', {{$data->id}})"
                                                        data-bs-target="#editAnggotaModal"
                                                        class="badge ms-2 bg-label-warning cursor-pointer border-0">
                                                    <i class="bx bx-edit"></i>
                                                </button>
                                                <button id="showModal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#permissionModal"
                                                        onclick=""
                                                        class="badge mx-2 bg-label-info cursor-pointer border-0">
                                                    <i class="bx bx-cog"></i>
                                                </button>
                                                <button id="showModal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteAnggotaModal"
                                                        onclick="getAnggotaById('delete', {{$data->id}})"
                                                        class="badge bg-label-danger cursor-pointer border-0">
                                                    <i class="bx bx-trash"></i>
                                                </button>
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

    <div class="modal fade" id="anggotaModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Buat Akun untuk: <span id="anggotaModalTitle"></span></h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form action="" id="updateForm" method="post">
                    @csrf
                    @method('put')
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="username"
                                        id="username"
                                        placeholder=" "
                                        aria-describedby="username"
                                    />
                                    <label for="username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <small class="fw-bold">Harap copy password sebelum submit!</small>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="password" name="password"
                                           placeholder="Password" readonly>
                                    <button type="button" class="btn btn-primary btn-sm" onclick="generatePass()">
                                        Generate
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Buat</button>
                    </div>
                </form>
                <div class="d-flex mt-4 ms-2">
                    <p class="me-4">Ditambahkan oleh: <span class="fw-bold" id="user_add"></span></p>
                    <p>Diupdate oleh: <span class="fw-bold" id="user_update"></span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteAnggotaModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data: <span id="anggotaName"></span></h5>
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

    <div class="modal fade" id="editAnggotaModal" tabindex="-1"
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
                                    <label for="nama_mandarin_hanzi">Nama Mandarin
                                        (Hanzi)</label>
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
                                    <label for="nama_mandarin_pinyin">Nama Mandarin
                                        (Pinyin)</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="tempat_lahir"
                                        name="tempat_lahir"
                                        placeholder=" "
                                        aria-describedby="tempat_lahir"
                                    />
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="col mb-3">
                                <div class="form-floating">
                                    <input
                                        type="date"
                                        class="form-control"
                                        id="tgl_lahir"
                                        name="tgl_lahir"
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
                                <select
                                    class="form-control"
                                    id="gol_darah_edit"
                                    name="gol_darah"
                                    aria-describedby="gol_darah"
                                >
                                    <option value="" disabled selected>--GOL
                                        DARAH--
                                    </option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <select
                                    class="form-control"
                                    id="status_ketuhanan_edit"
                                    name="status_ketuhanan"
                                    aria-describedby="status_ketuhanan"
                                >
                                    <option value="" disabled selected>--STATUS
                                        KETUHANAN--
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col mb-3">
                                <select
                                    class="form-control"
                                    id="status_vegetarian_edit"
                                    name="status_vegetarian"
                                    aria-describedby="status_vegetarian"
                                >
                                    <option value="" disabled selected>--STATUS
                                        VEGETARIAN--
                                    </option>
                                </select>
                            </div>
                            <div class="col mb-3">
                                <select
                                    class="form-control"
                                    id="status_qiu_dao_edit"
                                    name="status_qiu_dao"
                                    aria-describedby="status_qiu_dao"
                                >
                                    <option value="" disabled selected>--STATUS QIU
                                        DAO--
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
                        <button type="submit" class="btn btn-primary">Update Data</button>
                    </div>
                </form>
                <div class="d-flex mt-4 ms-2">
                    <p class="me-4">Ditambahkan oleh: <span class="fw-bold" id="user_add"></span></p>
                    <p>Diupdate oleh: <span class="fw-bold" id="user_update"></span></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            new DataTable("#anggotaTable")

            $("#gol_darah, #gol_darah_edit").one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'gol_darah'},
                    url: `get-status`,
                    dataType: 'json',
                    success: function (response) {
                        appendToSelect('gol_darah', 'gol_darah_edit', response)
                    }
                })
            })

            $("#status_ketuhanan, #status_ketuhanan_edit").one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_ketuhanan'},
                    url: `get-status`,
                    dataType: 'json',
                    success: function (response) {
                        appendToSelect('status_ketuhanan', 'status_ketuhanan_edit', response)
                    }
                })
            })

            $("#status_vegetarian, #status_vegetarian").one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_vegetarian'},
                    url: `get-status`,
                    dataType: 'json',
                    success: function (response) {
                        appendToSelect('status_vegetarian', 'status_vegetarian_edit', response)
                    }
                })
            })

            $("#status_qiu_dao, #status_qiu_dao_edit").one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_qiu_dao'},
                    url: `get-status`,
                    dataType: 'json',
                    success: function (response) {
                        appendToSelect('status_qiu_dao', 'status_qiu_dao_edit', response)
                    }
                })
            })

            function appendToSelect(status, status2, response) {
                let len = 0

                if (response['data'] != null) {
                    len = response['data'].length
                }

                if (len > 0) {
                    for (let i = 0; i < len; i++) {
                        let id = response['data'][i].id
                        let desc = response['data'][i].desc
                        let options = `<option value=${id}>${desc}</option>`

                        $(`#${status}, #${status2}`).append(options)
                    }
                    $(`#${status}, #${status2}`).append("<option value=''>-</option>")
                } else {
                    let options = "<option value=''>Tidak ada data. Coba lagi.</option>"

                    $(`#${status}`).append(options)
                }
            }
        })

        function getAnggotaById(status, id) {
            $.ajax({
                url: `get-anggota/${id}`,
                type: 'get',
                data: {id},
                dataType: 'json',
                success: function ({data}) {
                    if (status === 'add') {
                        sendToAddAccountModal(data)
                    } else if (status === 'edit') {
                        sendToEditModal(data)
                    } else if (status === 'delete') {
                        sendToDeleteModal(data)
                    }
                }
            })
        }

        function sendToAddAccountModal(data) {
            $("#anggotaModalTitle").text(data.nama_indo)
            $("#anggotaModal #user_add").text(data.user_add)
            $("#anggotaModal #user_update").text(data.user_update)
            $("#updateForm").attr("action", () => `/anggota/${data.id}`)
        }

        function generatePass() {
            let pass = document.querySelector('#password')
            const result = Math.random().toString(36).substring(2, 10);

            pass.value = result;
        }

        function sendToDeleteModal(data) {
            $("#anggotaName").text(data.nama_indo)
            $("#deleteForm").attr("action", () => `/anggota/${data.id}`)
        }

        function sendToEditModal(data) {
            $("#edit-anggota-form").attr('action', () => `/anggota/${data.id}`)
            $("#editFormTitle").text(data.nama_indo)
            $("#editAnggotaModal #user_add").text(data.user_add)
            $("#editAnggotaModal #user_update").text(data.user_update)
            $("#editAnggotaModal #nama_indo").val(data.nama_indo)
            $("#editAnggotaModal #nama_mandarin_hanzi").val(data.nama_mandarin_hanzi)
            $("#editAnggotaModal #nama_mandarin_pinyin").val(data.nama_mandarin_pinyin)
            $("#editAnggotaModal #tempat_lahir").val(data.tempat_lahir)
            $("#editAnggotaModal #tgl_lahir").val(data.tgl_lahir)
            $("#editAnggotaModal #alamat").val(data.alamat)
            $("#editAnggotaModal #telp").val(data.telp)
        }
    </script>
@endpush

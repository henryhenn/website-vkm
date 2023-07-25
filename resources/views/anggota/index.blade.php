@php use function App\Helpers\convert_date; @endphp
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
                            data-bs-target="#modalCenter"
                        >
                            Tambah Anggota Baru
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
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
                                                            class="form-control @error('nama_indo') is_invalid @enderror"
                                                            id="nama_indo"
                                                            name="nama_indo"
                                                            value="{{old('nama_indo')}}"
                                                            placeholder=" "
                                                            aria-describedby="nama_indo"
                                                        />
                                                        <label for="nama_indo">Nama Indonesia</label>

                                                        @error('nama_indo')
                                                        <span class="invalid-feedback">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control @error('nama_mandarin_hanzi') is_invalid @enderror"
                                                            id="nama_mandarin_hanzi"
                                                            name="nama_mandarin_hanzi"
                                                            value="{{old('nama_mandarin_hanzi')}}"
                                                            placeholder=" "
                                                            aria-describedby="nama_mandarin_hanzi"
                                                        />
                                                        <label for="nama_mandarin_hanzi">Nama Mandarin (Hanzi)</label>

                                                        @error('nama_mandarin_hanzi')
                                                        <span class="invalid-feedback">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control @error('nama_mandarin_pinyin') is_invalid @enderror"
                                                            id="nama_mandarin_pinyin"
                                                            name="nama_mandarin_pinyin"
                                                            value="{{old('nama_mandarin_pinyin')}}"
                                                            placeholder=" "
                                                            aria-describedby="nama_mandarin_pinyin"
                                                        />
                                                        <label for="nama_mandarin_pinyin">Nama Mandarin (Pinyin)</label>

                                                        @error('nama_mandarin_pinyin')
                                                        <span class="invalid-feedback">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control @error('tempat_lahir') is_invalid @enderror"
                                                            id="tempat_lahir"
                                                            name="tempat_lahir"
                                                            value="{{old('tempat_lahir')}}"
                                                            placeholder=" "
                                                            aria-describedby="tempat_lahir"
                                                        />
                                                        <label for="tempat_lahir">Tempat Lahir</label>

                                                        @error('tempat_lahir')
                                                        <span class="invalid-feedback">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="date"
                                                            class="form-control @error('tgl_lahir') is_invalid @enderror"
                                                            id="tgl_lahir"
                                                            name="tgl_lahir"
                                                            value="{{old('tgl_lahir')}}"
                                                            placeholder=" "
                                                            aria-describedby="tgl_lahir"
                                                        />
                                                        <label for="tgl_lahir">Tanggal Lahir</label>

                                                        @error('tgl_lahir')
                                                        <span class="invalid-feedback">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                <textarea
                                                    class="form-control @error('alamat') is_invalid @enderror"
                                                    id="alamat"
                                                    name="alamat"
                                                    placeholder=" "
                                                    aria-describedby="alamat"
                                                >{{old('alamat')}}</textarea>
                                                        <label for="alamat">Alamat</label>

                                                        @error('alamat')
                                                        <span class="invalid-feedback">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-floating">
                                                        <input
                                                            type="text"
                                                            class="form-control @error('telp') is_invalid @enderror"
                                                            id="telp"
                                                            name="telp"
                                                            placeholder=" "
                                                            value="{{old('telp')}}"
                                                            aria-describedby="telp"
                                                        >
                                                        <label for="telp">No. Telepon</label>

                                                        @error('telp')
                                                        <span class="invalid-feedback">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <select
                                                        class="form-control @error('gol_darah') is_invalid @enderror"
                                                        id="gol_darah"
                                                        name="gol_darah"
                                                        aria-describedby="gol_darah"
                                                    >
                                                        <option value="" disabled selected>--GOL DARAH--</option>
                                                    </select>
                                                    @error('gol_darah')
                                                    <span class="invalid-feedback">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col mb-3">
                                                    <select
                                                        class="form-control @error('status_ketuhanan') is_invalid @enderror"
                                                        id="status_ketuhanan"
                                                        name="status_ketuhanan"
                                                        aria-describedby="status_ketuhanan"
                                                    >
                                                        <option value="" disabled selected>--STATUS KETUHANAN--</option>
                                                    </select>
                                                    @error('status_ketuhanan')
                                                    <span class="invalid-feedback">{{$message}}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row g-2">
                                                <div class="col mb-3">
                                                    <select
                                                        class="form-control @error('status_vegetarian') is_invalid @enderror"
                                                        id="status_vegetarian"
                                                        name="status_vegetarian"
                                                        aria-describedby="status_vegetarian"
                                                    >
                                                        <option value="" disabled selected>--STATUS VEGETARIAN--
                                                        </option>
                                                    </select>
                                                    @error('status_vegetarian')
                                                    <span class="invalid-feedback">{{$message}}</span>
                                                    @enderror
                                                </div>
                                                <div class="col mb-3">
                                                    <select
                                                        class="form-control @error('status_qiu_dao') is_invalid @enderror"
                                                        id="status_qiu_dao"
                                                        name="status_qiu_dao"
                                                        aria-describedby="status_qiu_dao"
                                                    >
                                                        <option value="" disabled selected>--STATUS QIU DAO--</option>
                                                    </select>
                                                    @error('status_qiu_dao')
                                                    <span class="invalid-feedback">{{$message}}</span>
                                                    @enderror
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
                                        <td>{{$data->nama_mandarin_hanzi}} | {{$data->nama_mandarin_pinyin}}</td>
                                        <td>{{$data->telp}}</td>
                                        <td>
                                            <span
                                                class="badge bg-label-{{$data->active ? 'success' : 'danger'}}">{{$data->active ? 'Aktif' : 'Non-aktif'}}</span>
                                        </td>
                                        <td>{{convert_date($data->created_at)}}</td>
                                        <td>
                                            <div class="d-flex">
                                                @if(!$data->active)
                                                    <button id="showModal"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#anggotaModal"
                                                            onclick="getAnggotaById({{$data->id}})"
                                                            class="badge bg-label-success me-2 cursor-pointer border-0">
                                                        <i class="bx bx-user-plus"></i>
                                                    </button>
                                                @endif
                                                <a href="" class="badge bg-label-primary">
                                                    <i class="bx bx-show"></i>
                                                </a>
                                                <button id="showModal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#anggotaModal"
                                                        onclick=""
                                                        class="badge mx-2 bg-label-warning cursor-pointer border-0">
                                                    <i class="bx bx-edit"></i>
                                                </button>
                                                <button id="showModal"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#anggotaModal"
                                                        onclick=""
                                                        class="badge mx-2 bg-label-danger cursor-pointer border-0">
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
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="password" name="password"
                                           placeholder="Password" readonly>
                                    <button type="button" class="btn btn-primary btn-sm" onclick="generatePass()">
                                        Generate
                                    </button>
                                    <div id="errPassword" class="invalid-feedback"></div>
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
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            new DataTable("#anggotaTable")

            $("#gol_darah").one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'gol_darah'},
                    url: `get-status`,
                    dataType: 'json',
                    success: function (response) {
                        appendToSelect('gol_darah', response)
                    }
                })
            })

            $("#status_ketuhanan").one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_ketuhanan'},
                    url: `get-status`,
                    dataType: 'json',
                    success: function (response) {
                        appendToSelect('status_ketuhanan', response)
                    }
                })
            })

            $("#status_vegetarian").one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_vegetarian'},
                    url: `get-status`,
                    dataType: 'json',
                    success: function (response) {
                        appendToSelect('status_vegetarian', response)
                    }
                })
            })

            $("#status_qiu_dao").one('click', function () {
                $.ajax({
                    type: 'post',
                    data: {_token: $("meta[name=csrf-token]").attr('content'), status: 'status_qiu_dao'},
                    url: `get-status`,
                    dataType: 'json',
                    success: function (response) {
                        appendToSelect('status_qiu_dao', response)
                    }
                })
            })

            function appendToSelect(status, response) {
                let len = 0

                if (response['data'] != null) {
                    len = response['data'].length
                }

                if (len > 0) {
                    for (let i = 0; i < len; i++) {
                        let id = response['data'][i].id
                        let desc = response['data'][i].desc
                        let options = `<option value=${id}>${desc}</option>`

                        $(`#${status}`).append(options)
                    }
                    $(`#${status}`).append("<option value=''>-</option>")
                } else {
                    let options = "<option value=''>Tidak ada data. Coba lagi.</option>"

                    $(`#${status}`).append(options)
                }
            }

        })

        function getAnggotaById(id) {
            $.ajax({
                url: `get-anggota/${id}`,
                type: 'get',
                data: {id},
                dataType: 'json',
                success: function ({data}) {
                    $("#anggotaModalTitle").text(data.nama_indo)
                    $("#updateForm").attr("action", () => `/anggota/${id}`)
                }
            })
        }

        function generatePass() {
            let pass = document.querySelector('#password')
            const result = Math.random().toString(36).substring(2, 10);

            pass.value = result;
        }
    </script>
@endpush

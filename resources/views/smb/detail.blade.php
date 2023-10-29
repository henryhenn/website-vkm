@php use function App\Helpers\convert_date;use function App\Helpers\tgl_indo; @endphp
@extends('layouts.app', ['title' => 'Detail Data Sekolah Minggu'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Detail Data Sekolah Minggu: {{$sekolah_minggu->nama}}</h5>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h6>Nama</h6>
                            <h6>Tanggal Lahir</h6>
                            <h6>Jenis Kelamin</h6>
                            <h6>Alamat</h6>
                            <h6>Kelas</h6>
                            <h6>No. Telepon</h6>
                            <h6>Nama Orang Tua</h6>
                            <h6>Status Qiu Dao</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">{{$sekolah_minggu->nama}}</h6>
                            <h6 class="fw-bold">{{tgl_indo(convert_date($sekolah_minggu->tgl_lahir))}}</h6>
                            <h6 class="fw-bold">{{$sekolah_minggu->jenis_kelamin}}</h6>
                            <h6 class="fw-bold">{{$sekolah_minggu->alamat}}</h6>
                            <h6 class="fw-bold">{{$sekolah_minggu->kelas}}</h6>
                            <h6 class="fw-bold">{{$sekolah_minggu->telp}}</h6>
                            <h6 class="fw-bold">{{$sekolah_minggu->nama_ortu}}</h6>
                            <h6 class="fw-bold">{{$sekolah_minggu->desc}}</h6>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex">
                    <h6 class="me-3">Ditambahkan oleh: <span
                            class="fw-bold">{{$sekolah_minggu->user_add . ' | ' . tgl_indo(convert_date($sekolah_minggu->created_at))  . ' ' . strstr($sekolah_minggu->created_at, " ")}}</span>
                    </h6>
                    <h6>Diupdate oleh: <span
                            class="fw-bold">{{$sekolah_minggu->user_update ? $sekolah_minggu->user_update . ' | ' .  tgl_indo(convert_date($sekolah_minggu->updated_at)) . ' ' . strstr($sekolah_minggu->updated_at, " ") : 'Data belum pernah diupdate'}}</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>

@endsection

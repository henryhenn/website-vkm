@extends('layouts.app', ['title' => 'Detail Anggota'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Detail Data: {{$anggota->nama_indo}}</h5>

                    <div class="text-center">
                        <img src="{{asset($anggota->image ?? '/img/admin.jpeg')}}"
                             alt="{{$anggota->nama_indo}}" width="200px"
                             class="rounded">

                        <p id="quote" class="mb-2"></p>
                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <h6>Nama</h6>
                            <h6>{{$anggota->nama_mandarin_hanzi && $anggota->nama_mandarin_pinyin ? 'Nama Mandarin' : ''}}</h6>
                            <h6>Tempat Lahir</h6>
                            <h6>Tanggal Lahir</h6>
                            <h6>Alamat</h6>
                            <h6>{{$anggota->telp ? 'Telepon' : ''}}</h6>
                            <h6>{{$anggota->gol_darah ? 'Golongan Darah' : ''}}</h6>
                            <h6>{{$anggota->status_ketuhanan ? 'Status Ketuhanan' : ''}}</h6>
                            <h6>{{$anggota->status_vegetarian ? 'Status Vegetarian' : ''}}</h6>
                            <h6>{{$anggota->status_qiuddao ? 'Status Qiu Dao' : ''}}</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">{{$anggota->nama_indo}}</h6>
                            <h6 class="fw-bold">
                                <span class="text-mandarin">{{$anggota->nama_mandarin_hanzi}}</span>
                                - {{$anggota->nama_mandarin_pinyin}}</h6>
                            <h6 class="fw-bold">{{$anggota->tempat_lahir}}</h6>
                            <h6 class="fw-bold">{{$anggota->tgl_lahir->format('d - M - Y')}}</h6>
                            <h6 class="fw-bold">{{$anggota->alamat}}</h6>
                            <h6 class="fw-bold">{{$anggota->telp ?? ''}}</h6>
                            <h6 class="fw-bold">{{$anggota->gol_darah ?? ''}}</h6>
                            <h6 class="fw-bold">{{$anggota->status_ketuhanan ?? ''}}</h6>
                            <h6 class="fw-bold">{{$anggota->status_vegetarian ?? ''}}</h6>
                            <h6 class="fw-bold">{{$anggota->status_qiudao ?? ''}}</h6>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex">
                    <h6 class="me-3">Ditambahkan oleh: <span class="fw-bold">{{$anggota->user_add}}</span></h6>
                    <h6>Diupdate oleh: <span class="fw-bold">{{$anggota->user_update}}</span></h6>
                </div>
            </div>
        </div>
    </div>

@endsection


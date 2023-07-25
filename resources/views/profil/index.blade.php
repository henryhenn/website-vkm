@extends('layouts.app', ['title' => 'Profil Saya'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message />

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Profil Saya</h5>

                        <a href="{{route('profil.edit', auth()->id())}}" class="btn btn-primary">Edit Profil</a>
                    </div>

                    <div class="text-center">
                        <img src="{{asset(auth()->user()->image ?? '/img/admin.jpeg')}}" alt="{{auth()->user()->nama_indo}}" width="200px"
                             class="rounded">
                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <h6>Nama</h6>
                            <h6>Nama Mandarin</h6>
                            <h6>Tempat Lahir</h6>
                            <h6>Tanggal Lahir</h6>
                            <h6>Alamat</h6>
                            <h6>Telepon</h6>
                            <h6>{{auth()->user()->gol_darah == 0 ? '' : 'Golongan Darah'}}</h6>
                            <h6>{{auth()->user()->status_ketuhanan == 0 ? '' : 'Status Ketuhanan'}}</h6>
                            <h6>{{auth()->user()->status_vegetarian == 0 ? '' : 'Status Vegetarian'}}</h6>
                            <h6>{{auth()->user()->status_qiuddao == 0 ? '' : 'Status Qiu Dao'}}</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">{{auth()->user()->nama_indo}}</h6>
                            <h6 class="fw-bold">
                                <span class="text-mandarin">{{auth()->user()->nama_mandarin_hanzi}}</span> - {{auth()->user()->nama_mandarin_pinyin}}</h6>
                            <h6 class="fw-bold">{{auth()->user()->tempat_lahir}}</h6>
                            <h6 class="fw-bold">{{auth()->user()->tgl_lahir->format('d - M - Y')}}</h6>
                            <h6 class="fw-bold">{{auth()->user()->alamat}}</h6>
                            <h6 class="fw-bold">{{auth()->user()->telp}}</h6>
                            <h6 class="fw-bold">{{auth()->user()->gol_darah == 0 ? '' : auth()->user()->gol_darah}}</h6>
                            <h6 class="fw-bold">{{auth()->user()->status_ketuhanan == 0 ? '' : auth()->user()->status_ketuhanan}}</h6>
                            <h6 class="fw-bold">{{auth()->user()->status_vegetarian == 0 ? '' : auth()->user()->status_vegetarian}}</h6>
                            <h6 class="fw-bold">{{auth()->user()->status_qiudao == 0 ? '' : auth()->user()->status_qiudao}}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

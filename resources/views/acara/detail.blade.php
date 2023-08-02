@php use function App\Helpers\convert_date;use function App\Helpers\tgl_indo; @endphp
@extends('layouts.app', ['title' => 'Detail Acara'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Detail Acara: {{$acara->acara}}</h5>

                    <div class="text-center">
                        <img src="{{asset($acara->image)}}"
                             alt="{{$acara->acara}}" width="400px"
                             class="rounded">
                    </div>

                    <div class="row mt-3">
                        <div class="col-6">
                            <h6>Acara</h6>
                            <h6>Tanggal</h6>
                            <h6>Tempat</h6>
                            <h6>Jam</h6>
                            <h6>Aktif</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">{{$acara->acara}}</h6>
                            <h6 class="fw-bold">{{tgl_indo(convert_date($acara->tgl))}}</h6>
                            <h6 class="fw-bold">{{$acara->tempat ?? '-'}}</h6>
                            <h6 class="fw-bold">{{$acara->jam_mulai && $acara->jam_selesai ? $acara->jam_mulai . ' - ' . $acara->jam_selesai : 'Tidak ada detail jam'}}</h6>
                            <h6 class="fw-bold">
                                <span
                                    class="badge bg-label-{{$acara->active ? 'success' : 'danger'}}">{{$acara->active ? 'Aktif' : 'Non-aktif'}}</span>
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex">
                    <h6 class="me-3">Ditambahkan oleh: <span class="fw-bold">{{$acara->user_add . ' | ' . tgl_indo(convert_date($acara->created_at))  . ' ' . $acara->created_at->format('H:i')}}</span></h6>
                    <h6>Diupdate oleh: <span class="fw-bold">{{$acara->user_update . ' | ' .  tgl_indo(convert_date($acara->updated_at)) . ' ' . $acara->updated_at->format('H:i')}}</span></h6>
                </div>
            </div>
        </div>
    </div>

@endsection


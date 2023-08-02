@php use function App\Helpers\convert_date;use function App\Helpers\tgl_indo; @endphp
@extends('layouts.app', ['title' => 'Detail Data Qiu Dao'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Detail Qiu Dao: {{$qiudao->nama_indo}}</h5>

                    <div class="row mt-4">
                        <div class="col-6">
                            <h6>Nama</h6>
                            <h6>{{$qiudao->nama_mandarin_hanzi && $qiudao->nama_mandarin_pinyin ? 'Nama Mandarin' : ''}}</h6>
                            <h6>Tanggal Indonesia</h6>
                            <h6>Tanggal Imlek</h6>
                            <h6>Jenis Kelamin</h6>
                            <h6>Alamat</h6>
                            <h6>{{$qiudao->telp ? 'Telepon' : ''}}</h6>
                            <h6>Pengajak</h6>
                            <h6>Penanggung</h6>
                            <h6>Pandita</h6>
                            <h6>Amal</h6>
                        </div>
                        <div class="col-6">
                            <h6 class="fw-bold">{{$qiudao->nama_indo}}</h6>
                            <h6 class="fw-bold">
                                <span class="text-mandarin">{{$qiudao->nama_mandarin_hanzi}}</span>
                                - {{$qiudao->nama_mandarin_pinyin}}</h6>
                            <h6 class="fw-bold">{{tgl_indo(convert_date($qiudao->tgl_indo))}}</h6>
                            <h6 class="fw-bold">{{'Bulan: ' . $qiudao->bln_imlek . ' | ' . 'Tanggal: ' . $qiudao->tgl_imlek}}</h6>
                            <h6 class="fw-bold">{{$qiudao->jenis_kelamin}}</h6>
                            <h6 class="fw-bold">{{$qiudao->alamat}}</h6>
                            <h6 class="fw-bold">{{$qiudao->telp ?? ''}}</h6>
                            <h6 class="fw-bold">{{$qiudao->pengajak}}</h6>
                            <h6 class="fw-bold">{{$qiudao->penanggung}}</h6>
                            <h6 class="fw-bold">{{$qiudao->pandita}}</h6>
                            <h6 class="fw-bold"><span id="amal"></span></h6>
                        </div>
                    </div>
                </div>

                <div class="card-footer d-flex">
                    <h6 class="me-3">Ditambahkan oleh: <span class="fw-bold">{{$qiudao->user_add . ' | ' . tgl_indo(convert_date($qiudao->created_at))  . ' ' . $qiudao->created_at->format('H:i')}}</span></h6>
                    <h6>Diupdate oleh: <span class="fw-bold">{{$qiudao->user_update . ' | ' .  tgl_indo(convert_date($qiudao->updated_at)) . ' ' . $qiudao->updated_at->format('H:i')}}</span></h6>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        })

        $("#amal").text(formatter.format({{$qiudao->amal}}))
    </script>
@endpush


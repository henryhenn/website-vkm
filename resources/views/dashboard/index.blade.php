@php use function App\Helpers\convert_date;use function App\Helpers\count_data; @endphp
@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    <x-alert-message/>

    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang kembali, {{auth()->user()->nama_indo}}
                                !</h5>
                            <p class="mb-4" id="quote"></p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="{{asset(auth()->user()->image ?? '/img/admin.jpeg')}}"
                                height="140"
                                alt="{{auth()->user()->nama_indo}}"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h5 class="m-0 me-2">Jadwal Kebaktian</h5>
                    </div>
                    @forelse($kebaktian as $kebaktian)
                        <span class="d-block mb-1">{{$kebaktian->kondisi}}: <span
                                class="fw-bold">{{$kebaktian->desc ?? '-'}}</span></span>
                    @empty
                        <h6 class="m-0 me-2">Tidak ada jadwal kebaktian terbaru.</h6>
                    @endforelse
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Anggota Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Indonesia</th>
                                    <th>Telepon</th>
                                    <th>Tanggal didaftarkan</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($anggota as $key => $data)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$data->nama_indo}}</td>
                                        <td>{{$data->telp}}</td>
                                        <td>{{convert_date($data->created_at)}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            <h3 class="text-center fw-bold">Tidak ada data anggota terbaru</h3>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('sneat/assets/img/icons/unicons/chart.png')}}" alt="Credit Card"
                                         class="rounded"/>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Pandita Madya</span>
                            <h3 class="card-title text-nowrap mb-2">{{count_data('Pandita Madya')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{asset('sneat/assets/img/icons/unicons/chart.png')}}"
                                         alt="Credit Card" class="rounded"/>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Buddha Siswa</span>
                            <h3 class="card-title mb-2">{{count_data('Buddha Siswa')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="{{asset('sneat/assets/img/icons/unicons/chart.png')}}"
                                        alt="chart success"
                                        class="rounded"
                                    />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Umat</span>
                            <h3 class="card-title mb-2">{{count_data('Umat')}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="avatar flex-shrink-0">
                                    <img
                                        src="{{asset('sneat/assets/img/icons/unicons/chart.png')}}"
                                        alt="Credit Card"
                                        class="rounded"
                                    />
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Jumlah Aktivis</span>
                            <h3 class="card-title text-nowrap mb-1">{{count_data('Aktivis')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $.ajax({
                type: 'get',
                url: 'get-user-quote',
                dataType: 'json',
                success: function ({data}) {
                    if (data !== null) {
                        $("#quote").append(data.quotes)
                    } else {
                        $("#quote").append('Tidak ada quotes terakhir')
                    }
                }
            })
        })
    </script>
@endpush

@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat datang kembali, {{auth()->user()->nama}}! 🎉</h5>
                            <p class="mb-4">
                                You have done <span class="fw-bold">72%</span> more sales today. Check
                                your new badge in
                                your profile.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                src="{{asset(auth()->user()->foto)}}"
                                height="140"
                                alt="View Badge User"
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
                                    <th>Tanggal mendaftar</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Henry Salim</td>
                                    <td>
                                        081586043931
                                    </td>
                                    <td>
                                        16-07-2023
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Henry Salim</td>
                                    <td>
                                        081586043931
                                    </td>
                                    <td>
                                        16-07-2023
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Henry Salim</td>
                                    <td>
                                        081586043931
                                    </td>
                                    <td>
                                        16-07-2023
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Henry Salim</td>
                                    <td>
                                        081586043931
                                    </td>
                                    <td>
                                        16-07-2023
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>Henry Salim</td>
                                    <td>
                                        081586043931
                                    </td>
                                    <td>
                                        16-07-2023
                                    </td>
                                </tr>
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
                            <h3 class="card-title text-nowrap mb-2">0</h3>
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
                            <h3 class="card-title mb-2">0</h3>
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
                            <h3 class="card-title mb-2">0</h3>
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
                            <h3 class="card-title text-nowrap mb-1">0</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

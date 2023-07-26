@extends('layouts.app', ['title' => 'Profil Saya'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Profil Saya</h5>

                        <div class="d-flex">
                            <a href="{{route('profil.edit', auth()->id())}}" class="btn btn-primary">Edit Profil</a>
                            <button
                                type="button"
                                class="btn ms-2 btn-success"
                                data-bs-toggle="modal"
                                data-bs-target="#quotesModal"
                            >
                                <i class="bx bx-edit"></i> Quotes
                            </button>
                        </div>
                    </div>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-danger">{{$error}}</li>
                        @endforeach
                    </ul>

                    <div class="text-center">
                        <img src="{{asset(auth()->user()->image ?? '/img/admin.jpeg')}}"
                             alt="{{auth()->user()->nama_indo}}" width="200px"
                             class="rounded">

                        <p id="quote" class="mb-2"></p>
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
                                <span class="text-mandarin">{{auth()->user()->nama_mandarin_hanzi}}</span>
                                - {{auth()->user()->nama_mandarin_pinyin}}</h6>
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

    <div class="modal fade" id="quotesModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Quotes Baru</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form action="{{route('quotes.store')}}" id="quotesForm" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <div class="form-floating">
                                <textarea
                                    class="form-control @error('quotes') is_invalid @enderror"
                                    id="quotes"
                                    name="quotes"
                                    placeholder=" "></textarea>
                                    <label for="quotes">Quotes</label>

                                    @error('quotes')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
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
                        $("#quotes").append(data.quotes)
                        $("#quote").append(data.quotes)
                        $("#quotesForm").attr('action', () => `/quotes/${data.id}`)
                        $("#quotesForm").append('<input type="hidden" name="_method" value="put">')
                    }
                }
            })
        })
    </script>
@endpush

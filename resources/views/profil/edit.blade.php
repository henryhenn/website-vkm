@extends('layouts.app', ['title' => 'Edit Profil Saya'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-primary">Edit Profil Saya</h5>

                        <a href="{{route('profil.index')}}" class="text-danger">Kembali</a>
                    </div>

                    <form class="mt-4" method="post" action="{{route('profil.update', auth()->id())}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="nama_indo">Nama Indonesia</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge @error('nama_indo') is-invalid @enderror">
                                    <span id="nama_indo" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input
                                        type="text"
                                        name="nama_indo"
                                        class="form-control @error('nama_indo') is-invalid @enderror"
                                        id="nama_indo"
                                        value="{{old('nama_indo', auth()->user()->nama_indo)}}"
                                    />
                                </div>
                                @error('nama_indo')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="nama_mandarin_hanzi">Nama Mandarin (Hanzi)</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge @error('nama_mandarin_hanzi') is-invalid @enderror">
                                    <span id="nama_mandarin_hanzi" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input
                                        type="text"
                                        name="nama_mandarin_hanzi"
                                        class="form-control @error('nama_mandarin_hanzi') is-invalid @enderror"
                                        id="nama_mandarin_hanzi"
                                        value="{{old('nama_mandarin_hanzi', auth()->user()->nama_mandarin_hanzi)}}"
                                    />
                                </div>
                                @error('nama_mandarin_hanzi')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="nama_mandarin_pinyin">Nama Mandarin (Pinyin)</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge @error('nama_mandarin_pinyin') is-invalid @enderror">
                                    <span id="nama_mandarin_pinyin" class="input-group-text"><i
                                            class="bx bx-user"></i></span>
                                    <input
                                        type="text"
                                        name="nama_mandarin_pinyin"
                                        class="form-control @error('nama_mandarin_pinyin') is-invalid @enderror"
                                        id="nama_mandarin_pinyin"
                                        value="{{old('nama_mandarin_pinyin', auth()->user()->nama_mandarin_pinyin)}}"
                                    />
                                </div>
                                @error('nama_mandarin_pinyin')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="tempat_lahir">Tempat & Tgl Lahir</label>
                            <div class="col-sm-5">
                                <div class="input-group input-group-merge @error('tempat_lahir') is-invalid @enderror">
                                    <span id="tempat_lahir" class="input-group-text"><i
                                            class="bx bx-building-house"></i></span>
                                    <input
                                        type="text"
                                        name="tempat_lahir"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        id="tempat_lahir"
                                        value="{{old('tempat_lahir', auth()->user()->tempat_lahir)}}"
                                    />
                                </div>
                                @error('tempat_lahir')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col-sm-5">
                                <div class="input-group input-group-merge @error('tgl_lahir') is-invalid @enderror">
                                    <span id="tgl_lahir" class="input-group-text"><i
                                            class="bx bx-calendar"></i></span>
                                    <input
                                        type="date"
                                        name="tgl_lahir"
                                        class="form-control @error('tgl_lahir') is-invalid @enderror"
                                        id="tgl_lahir"
                                        value={{old('tgl_lahir', auth()->user()->tgl_lahir)}}
                                    />
                                </div>
                                @error('tgl_lahir')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="alamat">Alamat</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge @error('alamat') is-invalid @enderror">
                                    <span id="alamat" class="input-group-text"><i
                                            class="bx bx-home"></i></span>
                                    <input
                                        type="text"
                                        name="alamat"
                                        class="form-control @error('alamat') is-invalid @enderror"
                                        id="alamat"
                                        value="{{old('alamat', auth()->user()->alamat)}}"
                                    />
                                </div>
                                @error('alamat')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="telp">Telepon</label>
                            <div class="col-sm-10">
                                <div class="input-group input-group-merge @error('telp') is-invalid @enderror">
                                    <span id="telp" class="input-group-text"><i
                                            class="bx bx-phone"></i></span>
                                    <input
                                        type="text"
                                        name="telp"
                                        class="form-control @error('telp') is-invalid @enderror"
                                        id="telp"
                                        value="{{old('telp', auth()->user()->telp)}}"
                                    />
                                </div>
                                @error('telp')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        @if(auth()->user()->gol_darah !== 0)
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                       for="gol_darah">Gol. Darah</label>
                                <div class="col-sm-10">
                                    <select name="gol_darah" id="gol_darah"
                                            class="form-control @error('gol_darah')is-invalid @enderror">
                                        @foreach($gol_darah as $gol)
                                            <option
                                                value="{{$gol->id}}" @selected($gol->id == auth()->user()->gol_darah)>
                                                {{$gol->desc}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('gol_darah')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        @if(auth()->user()->status_ketuhanan !== 0)
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                       for="status_ketuhanan">Status Ketuhanan</label>
                                <div class="col-sm-10">
                                    <select name="status_ketuhanan" id="status_ketuhanan"
                                            class="form-control @error('status_ketuhanan')is-invalid @enderror">
                                        @foreach($status_ketuhanan as $status)
                                            <option
                                                value="{{$status->id}}" @selected($status->id == auth()->user()->status_ketuhanan)>
                                                {{$status->desc}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('status_ketuhanan')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        @if(auth()->user()->status_vegetarian !== 0)
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                       for="status_vegetarian">Status Vegetarian</label>
                                <div class="col-sm-10">
                                    <select name="status_vegetarian" id="status_vegetarian"
                                            class="form-control @error('status_vegetarian')is-invalid @enderror">
                                        @foreach($status_vegetarian as $status)
                                            <option
                                                value="{{$status->id}}" @selected($status->id == auth()->user()->status_vegetarian)>
                                                {{$status->desc}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('status_vegetarian')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        @if(auth()->user()->status_qiu_dao !== 0)
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"
                                       for="status_qiu_dao">Status Ketuhanan</label>
                                <div class="col-sm-10">
                                    <select name="status_qiu_dao" id="status_qiu_dao"
                                            class="form-control @error('status_qiu_dao')is-invalid @enderror">
                                        @foreach($status_qiu_dao as $status)
                                            <option
                                                value="{{$status->id}}" @selected($status->id == auth()->user()->status_qiu_dao)>
                                                {{$status->desc}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('status_qiu_dao')
                                    <span class="invalid-feedback">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        @endif
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"
                                   for="image">Image</label>
                            <div class="col-sm-10">
                                <input
                                    type="file"
                                    name="image"
                                    class="form-control @error('image') is-invalid @enderror"
                                    id="image"
                                />
                                @error('image')
                                <span class="invalid-feedback">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10 mt-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

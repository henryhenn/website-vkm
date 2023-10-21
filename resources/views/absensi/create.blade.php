@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Buat Absensi Baru'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Buat Absensi Baru</h5>
                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                    <div class="row mt-4">
                        <div class="table-responsive">
                            <form action="{{route('absensi.store')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control">
                                    </div>
                                </div>
                                <table class="display" id="absensiTable" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Siswa</th>
                                        <th>Hadir</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($siswa as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->nama}}</td>
                                            <td>
                                                <input type="checkbox" name="sekolah_minggu_id[]" id="sekolah_minggu_id[]"
                                                       class="input-check" value="{{$data->id}}">
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                                <button type="submit" class="btn btn-primary float-end mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/viewAbsensiScript.js')}}"></script>
@endpush

@php use function App\Helpers\convert_date;use function App\Helpers\tgl_indo; @endphp
@push('dataTablesCSS')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
@endpush

@extends('layouts.app', ['title' => 'Edit Absensi'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Edit
                        Absensi: {{tgl_indo(convert_date($absen->first()->tanggal))}}</h5>
                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                    <div class="row mt-4">
                        <div class="table-responsive">
                            <form action="{{route('absensi.update', $absen->first()->tanggal)}}" method="post">
                                @csrf
                                @method('patch')
                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" value="{{$absen->first()->tanggal}}" readonly
                                               id="tanggal" class="form-control">
                                    </div>
                                </div>
                                <table class="display" id="editAbsensiTable" width="100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Siswa</th>
                                        <th>Hadir</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($siswa as $siswa)
                                        @foreach($absen as $data)
                                            <tr>
                                                <td>{{$siswa->id}}</td>
                                                <td>{{$siswa->nama}}</td>
                                                <td>
                                                    <input type="checkbox" name="sekolah_minggu_id[]"
                                                           @checked($data->sekolahMinggu->id == $siswa->id) id="sekolah_minggu_id[]"
                                                           class="input-check" value="{{$data->sekolahMinggu->id}}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                    </tbody>
                                </table>

                                <button type="submit" class="btn btn-primary float-end mt-3">Update</button>
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
    <script>
        $(document).ready(function () {
            new DataTable("#editAbsensiTable")
        })
    </script>
@endpush

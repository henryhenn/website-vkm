@extends('layouts.app', ['title' => 'Daftar Anggota'])

@section('content')
    <div class="row">
        <div class="col lg-8">
            <x-alert-message/>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-primary">Atur Privilege untuk: {{$user->nama_indo}}</h5>

                    @foreach($errors->all() as $error)
                        <li class="text-danger">{{$error}}</li>
                    @endforeach
                    <div class="row mt-4">
                        <form action="{{route('permissions.store', $user->id)}}" method="post">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Menu</th>
                                        <th>View</th>
                                        <th>Create</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        <th>Control</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sub_menu as $sub)
                                        <tr>
                                            <td>{{$sub->sub_menu}}</td>
                                            @foreach($permissions as $permission)
                                                <td>
                                                    <div class="form-check form-switch mb-2">
                                                        <input class="form-check-input"
                                                               @checked($user->can(strtok($permission->name, ' ') . ' ' . $sub->sub_menu))
                                                               value="{{strtok($permission->name, ' ') . ' ' . $sub->sub_menu}}"
                                                               type="checkbox" name="permissions[]"
                                                               id="flexSwitchCheckDefault"/>
                                                    </div>
                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 float-end">Set Privilege</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

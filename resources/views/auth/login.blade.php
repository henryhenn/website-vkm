@extends('layouts.auth', ['title' => 'Login'])

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="text-center mb-4">
                <h1 class="fw-bold">Vihara Karuna Maitreya</h1>
            </div>

            <h5 class="mb-3">Selamat Datang di Admin Panel VKM! 👋</h5>

            <form id="formAuthentication" class="mb-3" action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                               name="username" placeholder="Username Anda" autofocus>
                        <label for="username">Username</label>

                        @error('username')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <div class="form-floating mb-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   id="password" name="password" placeholder="Password Anda">
                        <label for="password">Password</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            {{$message}}
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
            </form>

        </div>
    </div>
@endsection

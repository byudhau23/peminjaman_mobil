@extends('main')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit User</h1>
        <br>
        <a href="/user" class="btn btn-primary">
            Back</a>
        <hr>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There something wrong! <br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/user/{{ $user->id }}" method="post" class="mx-2">
            @method('PUT')
            <div class="form-group mt-3">
                @csrf
                <label for="nama">Nama</label>
                <input type="string" class="form-control" name="nama" placeholder="Masukkan Nama User"
                    value="{{ $user->nama }}">
            </div>

            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>

            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
            </div>

            <div class="form-group mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
@endsection

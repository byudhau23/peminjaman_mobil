@extends('main')
@section('content')
    <div class="container">
        <h1>Daftar User </h1>
        <br>
        <a href="/user/create" class="btn btn-primary">+ Tambah User</a>
        <hr>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $iteration++ }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>
                            <a href="/user/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/user" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('main')
@section('content')
    <div class="container">
        <h1>Daftar Mobil</h1>
        <br>
        <a href="/car/create" class="btn btn-primary">+ Tambah Mobil</a>
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
                    <th>Brand</th>
                    <th>Type</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($cars as $item)
                    <tr>
                        <td>{{ $iteration++ }}</td>
                        <td>{{ $item['brand'] }}</td>
                        <td>{{ $item['type'] }}</td>
                        <td>{{ $item['year'] }}</td>
                        <td>{{ number_format($item['price']) }}</td>
                        <td>
                            <a href="/car/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/car" method="POST" class="d-inline">
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

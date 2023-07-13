@extends('main')
@section('content')
    

        <h1>Daftar Booking</h1>
        <br>
        <a href="/bookings/create" class="btn btn-primary">+ Tambah Booking</a>
        <hr>

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>Cars Id</th>
                    <th>Booking Time</th>
                    <th>Return Time</th>
                </tr>
            </thead>
            <tbody>
                @php $iteration = 1 @endphp
                @foreach ($booking as $item)
                <tr>
                    <td>{{ $iteration++ }}</td>
                    <td>{{$item['user_id']}}</td>
                    <td>{{$item['cars_id']}}</td>
                    <td>{{$item['booking_time']}}</td>
                    <td>{{$item['return_time']}}</td>
                    <td>
                        <a href="/booking/edit/{{ $item->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/booking" method="POST" class="d-inline">
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
        @endsection
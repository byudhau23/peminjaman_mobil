@extends('main')
@section('content')
    
        <h1 class="text-center">Edit Booking</h1>
        <br>
        <a href="/bookings" class="btn btn-primary">
            < Back</a>
                <hr>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }} </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="/bookings/{{ $booking->id }}" method="post" class="mx-2">
                    @method('PUT')
                    <div class="form-group mt-3">
                        @csrf
                        <label for="user_id">User Id</label>
                        <input type="text" class="form-control" name="user_id" value="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="car_id">Car Id</label>
                        <input type="text" class="form-control" name="car_id" value="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="booking">Booking Time</label>
                        <input type="date" class="form-control" name="booking" value="">
                    </div>

                    <div class="form-group mt-3">
                        <label for="return">Return Time</label>
                        <input type="date" class="form-control" name="return" value="">
                    </div>

                    <div class="form-group mt-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

@endsection
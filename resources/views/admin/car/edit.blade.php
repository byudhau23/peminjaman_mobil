@extends('main')
@section('content')
    <div class="container">
        <h1 class="text-center">Edit Mobil</h1>
        <br>
        <a href="/car" class="btn btn-primary">
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

        <form action="/car/{{ $car->id }}" method="post" class="mx-2">
            @method('PUT')
            <div class="form-group mt-3">
                @csrf
                <label for="brand">Brand</label>
                <input type="string" class="form-control" name="brand" placeholder="Input Car Brand" value="{{ $car->brand }}">
            </div>

            <div class="form-group mt-3">
                <label for="type">Type</label>
                <input type="string" class="form-control" name="type" value="{{ $car->type }}">
            </div>

            <div class="form-group mt-3">
                <label for="year">Year</label>
                <input type="integer" class="form-control" name="year" value="{{ $car->year }}">
            </div>

            <div class="form-group mt-3">
                <label for="price">Price</label>
                <input type="integer" class="form-control" name="price" value="{{ $car->price }}">
            </div>

            <div class="form-group mt-3 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>

    </div>
@endsection

@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Car Model</th>
            <th>Popular to rent in</th>
            <th>Car Brand</th>
            <th>Actions</th>
        </tr>
        @foreach ($car_models as $carModel)
        <tr>
            <td>{{ $carModel->title }}</td>
            <td>{{ $carModel->popular_in }}</td>
            <td>{{ $carModel->brand->title}}</td>
            <td>
                <form action={{ route('car_model.destroy', $carModel->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('car_model.edit', $carModel->id) }}>Edit</a>
                    @csrf @method('delete')
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
        <br>
        <br>
        <a href="{{ route('car_model.create') }}" class="btn btn-success">Add Model</a>
    </div>
</div>
@endsection

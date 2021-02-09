@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Car Brand</th>
            <th>Country of origin</th>
            <th>Year the car was made</th>
            <th>Car Model</th>
            <th>Actions</th>
        </tr>
        @foreach ($brands as $brand)
        <tr>
            <td>{{ $brand->title }}</td>
            <td>{{ $brand->country }}</td>
            <td>{{ $brand->year }}</td>
            <td>{{ $brand->car_models->first()->title ?? ''  }}</td>
            <td>
                <form action={{ route('brands.destroy', $brand->id) }} method="POST">
                    <a class="btn btn-success" href={{ route('brands.edit', $brand->id) }}>Edit</a>
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
        <a href="{{ route('brands.create') }}" class="btn btn-success">Add New Brand</a>
    </div>
</div>
@endsection

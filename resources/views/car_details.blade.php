@extends('layouts.app')
@section('content')
<div class="card-body">
    <table class="table">
        <tr>
            <th>Car Brand</th>
            <th>Country of origin</th>
            <th>Year the car was made</th>
            <th>Car Model</th>
            <th>Preferred By</th>
        </tr>
        @foreach ($brands as $brand)
        <tr>
            <td>{{ $brand->title }}</td>
            <td>{{ $brand->country }}</td>
            <td>{{ $brand->year }}</td>
            <td>{{ $brand->car_models->first()->title ?? ''  }}</td>
            <td>{{ $brand->clients->first()->name ?? ''  }} {{ $brand->clients->first()->surname ?? '' }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
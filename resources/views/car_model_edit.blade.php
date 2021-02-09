@extends('layouts.app')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit car model</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('car_model.update', $car_model->id) }}">
                            @csrf @method("PUT")
                            <div class="form-group">
                                <label for="">Car Model: </label>
                                <input type="text" name="title" class="form-control" value="{{ $car_model->title }}">
                            </div>
                            <div class="form-group">
                                <label for="">Popular to rent in </label>
                                <input type="text" name="popular_in" class="form-control"
                                    value="{{ $car_model->popular_in }}">
                            </div>
                            <div class="form-group">
                                <label>Brand </label>
                                <select name="brand_id" id="" class="form-control">
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" @if ($brand->id == $car_model->brand_id) selected="selected" @endif>
                                            {{ $brand->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

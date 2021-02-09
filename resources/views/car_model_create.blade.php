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
                    <div class="card-header">Create new model</div>
                    <div class="card-body">


                        <form action="{{ route('car_model.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Model </label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Popular to rent in </label>
                                <input type="text" name="popular_in" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Brand </label>
                                <select name="brand_id" id="" class="form-control">
                                    <option value="" selected disabled>Choose brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->title }}</option>

                                    @endforeach
                                </select>

                            </div>
                            <button type="submit" class="btn btn-primary">Add Car Model</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

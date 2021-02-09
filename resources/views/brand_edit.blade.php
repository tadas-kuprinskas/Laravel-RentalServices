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
                    <div class="card-header">Edit Brand</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('brands.update', $brand->id) }}">
                            @csrf @method("PUT")
                            <div class="form-group">
                                <label for="">Brand Name</label>
                                <input type="text" name="title" class="form-control" value="{{ $brand->title }}">
                            </div>
                            <div class="form-group">
                                <label for="">Country of origin</label>
                                <input type="text" name="country" class="form-control" value="{{ $brand->country }}">
                            </div>
                            <div class="form-group">
                                <label for="">Year the car was made</label>
                                <input type="number" name="year" class="form-control" value="{{ $brand->year }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

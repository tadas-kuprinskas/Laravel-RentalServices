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
                    <div class="card-header">Add a new brand</div>
                    <div class="card-body">
                        <form action="{{ route('brands.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Brand name </label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Country of origin </label>
                                <input type="text" name="country" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Year </label>
                                <input type="number" name="year" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Add Brand</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

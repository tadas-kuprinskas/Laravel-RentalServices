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
                    <div class="card-header">Add a new client</div>
                    <div class="card-body">
                        <form action="{{ route('clients.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Name </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Surname </label>
                                <input type="text" name="surname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email: </label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone </label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Preferred Brand </label>
                                <select name="brand_id" id="" class="form-control">
                                    <option value="" selected disabled>Choose preferred brand</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Client</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

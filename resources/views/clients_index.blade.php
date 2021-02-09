@extends('layouts.app')
@section('content')
    <div class="card-body">
        @if ($errors->any())
            <h4 style="color: red">{{ $errors->first() }}</h4>
        @endif
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Preferred Brand</th>
                <th>Actions</th>
            </tr>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->surname }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->brand->title }}</td>
                    <td>
                        <form action={{ route('clients.destroy', $client->id) }} method="POST">
                            <a class="btn btn-success" href={{ route('clients.edit', $client->id) }}>Edit</a>
                            @csrf @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <br>
        <div>
            <a href="{{ route('clients.create') }}" class="btn btn-success">Add Client</a>
        </div>
    </div>
@endsection

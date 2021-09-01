@extends('layout.app')

@section('content')
    <h1>Fanlar</h1>

    <a href="/science/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($sciences as $science)
            <tr>
                <td>{{ $science->id }}</td>
                <td>{{ $science->name }}</td>

                <td>
                    <a href="/science/edit/{{ $science->id }}" class="btn btn-primary">Edit</a>
                    <a href="/science/delete/{{ $science->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

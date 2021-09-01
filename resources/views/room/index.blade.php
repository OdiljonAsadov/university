@extends('layout.app')

@section('content')
    <h1>Xonalar</h1>

    <a href="/room/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach ($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->description }}</td>

                <td>
                    <a href="/room/edit/{{ $room->id }}" class="btn btn-primary">Edit</a>
                    <a href="/room/delete/{{ $room->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

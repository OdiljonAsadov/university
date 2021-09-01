@extends('layout.app')

@section('content')
    <h1>Fanlar</h1>

    <a href="/day/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($days as $day)
            <tr>
                <td>{{ $day->id }}</td>
                <td>{{ $day->name }}</td>

                <td>
                    <a href="/day/edit/{{ $day->id }}" class="btn btn-primary">Edit</a>
                    <a href="/day/delete/{{ $day->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

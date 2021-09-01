@extends('layout.app')

@section('content')
    <h1>Fanlar</h1>

    <a href="/teacher/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Ismi</th>
            <th>Familiyasi</th>
            <th>Fan</th>
        </tr>
        @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher->id }}</td>
                <td>{{ $teacher->first_name }}</td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->science }}</td>

                <td>
                    <a href="/teacher/edit/{{ $teacher->id }}" class="btn btn-primary">Edit</a>
                    <a href="/teacher/delete/{{ $teacher->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

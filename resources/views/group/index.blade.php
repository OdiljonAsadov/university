@extends('layout.app')

@section('content')
    <h1>Groups</h1>

    <a href="/groups/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        @foreach ($groups as $group)
            <tr>
                <td>{{ $group->id }}</td>
                <td>{{ $group->name }}</td>
                <td>{{ $group->description }}</td>

                <td>
                    <a href="/groups/edit/{{ $group->id }}" class="btn btn-primary">Edit</a>
                    <a href="/groups/delete/{{ $group->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

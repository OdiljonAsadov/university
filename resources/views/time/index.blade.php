@extends('layout.app')

@section('content')
    <h1>Dars vaqtlari</h1>

    <a href="/time/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Boshlanishi</th>
            <th>Tugashi</th>
        </tr>
        @foreach ($times as $time)
            <tr>
                <td>{{ $time->id }}</td>
                <td>{{ $time->start }}</td>
                <td>{{ $time->finish }}</td>

                <td>
                    <a href="/time/edit/{{ $time->id }}" class="btn btn-primary">Edit</a>
                    <a href="/time/delete/{{ $time->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

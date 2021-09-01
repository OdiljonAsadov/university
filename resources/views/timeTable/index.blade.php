@extends('layout.app')

@section('content')
    <h1>Dars jadvali</h1>

    <a href="/timeTable/add" class="btn btn-success" style="margin-right: 20px">Create</a>

    <table class="table text-center">
        <tr>
            <th>ID</th>
            <th>Kun</th>
            <th>Guruh</th>
            <th>O'qituvchi</th>
            <th>Fan</th>
            <th>Xona</th>
            <th>time</th>
        </tr>
               @foreach ($timeTables as $timeTable)
        <tr>
                <td>{{ $timeTable->id }}</td>
                <td>{{ $timeTable->day->name }}</td>
                <td>{{ $timeTable->group->name }}</td>
                <td>{{ $timeTable->teacher->first_name }}{{ $timeTable->teacher->last_name }}</td>
                <td>{{ $timeTable->science->name }}</td>
                <td>{{ $timeTable->room->name }}</td>
                <td>{{ $timeTable->time->start }}-{{ $timeTable->time->finish }}</td>

                <td>
                    <a href="/timeTable/edit/{{ $timeTable->id }}" class="btn btn-primary">Edit</a>
                    <a href="/timeTable/delete/{{ $timeTable->id }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        {{ $timeTables->links() }}
    </table>
@endsection

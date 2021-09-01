@extends('layout.app')
@section('content')

<div><a class="btn btn-primary" style="width: 150px; margin-top: 2vh;" href="/time"> Back</a></div>
    <div class="card card-primary col-md-8" style="margin-left: 15vw; margin-top: -6    vh; height: 60vh">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Edit Order</h3>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ($timeTables as $timeTable)
            <form action="/timeTable/edit/{{ $timeTable->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cars">Munosib kunni tanlang:</label><br>
                            <select class="form-select form-select-sm" name="day_id">
                                @foreach ($days as $day)    
                                    <option value="{{ $day->id }}">{{ $day->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cars">Guruhni tanlang:</label><br>
                            <select  name="group_id">
                                <option value="{{ $timeTable->group_id }}" selected>{{ $timeTable->group->name ?? 'Na' }}</option>
                                @foreach ($groups as $group)    
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cars">Fan nomini tanlang:</label><br>
                            <select name="science_id">
                                <option value="{{ $timeTable->science_id }}" selected>{{ $timeTable->science->name ?? 'Na' }}</option>
                                @foreach ($sciences as $science)    
                                    <option  value="{{ $science->id }}">{{ $science->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cars">O'qituvchni tanlang:</label><br>
                            <select name="teacher_id">
                                <option value="{{ $timeTable->teacher_id }}" selected>{{ $timeTable->teacher->first_name ?? 'Na' }}{{ $timeTable->teacher->last_name ?? 'Na' }}</option>
                                @foreach ($teachers as $teacher)    
                                    <option  value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cars">Xona tanlang:</label><br>
                            <select name="room_id">
                                <option value="{{ $timeTable->room_id }}" selected>{{ $timeTable->room->name ?? 'Na' }}</option>
                                @foreach ($rooms as $room)    
                                    <option  value="{{ $room->id }}">{{ $room->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cars">Darsning boshlanish vaqti:</label><br>
                            <select name="time_id">
                                <option value="{{ $timeTable->time_id }}" selected>{{ $timeTable->time->start ?? 'Na' }}</option>
                                @foreach ($times as $time)    
                                    <option  value="{{ $time->id }}">{{ $time->start }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cars">Darsning tugash vaqti:</label><br>
                            <select name="time_id">
                                <option value="{{ $timeTable->time_id }}" selected>{{ $timeTable->time->finish ?? 'Na' }}</option>
                                @foreach ($times as $time)    
                                    <option value="{{ $time->id }}">{{ $time->finish }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
@endsection
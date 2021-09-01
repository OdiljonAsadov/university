@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-8" style="margin-left: 15vw; margin-top: 2vh; height: 65vh">
        <div class="card-header" style="width: 102.5%; margin-left: -7.5px">
            <h3 class="card-title">Добавить продукт</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/timeTable/add" method="post" enctype="multipart/form-data">
            @csrf
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
                        <select  name="group_id" id="cars">
                            @foreach ($groups as $group)    
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cars">Fan nomini tanlang:</label><br>
                        <select name="science_id" id="cars">
                            @foreach ($sciences as $science)    
                                <option  value="{{ $science->id }}">{{ $science->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cars">O'qituvchni tanlang:</label><br>
                        <select name="teacher_id" id="cars">
                            @foreach ($teachers as $teacher)    
                                <option  value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="cars">Xona tanlang:</label><br>
                        <select name="room_id" id="cars">
                            @foreach ($rooms as $room)    
                                <option  value="{{ $room->id }}">{{ $room->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cars">Darsning boshlanish vaqti:</label><br>
                        <select name="time_id" id="cars">
                            @foreach ($times as $time)    
                                <option  value="{{ $time->id }}">{{ $time->start }}</option>
                            @endforeach
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cars">Darsning tugash vaqti:</label><br>
                        <select name="time_id" id="cars">
                            @foreach ($times as $time)    
                                <option value="{{ $time->id }}">{{ $time->finish }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
                </div>
            </div>
            
        </form>
    </div>
@endsection

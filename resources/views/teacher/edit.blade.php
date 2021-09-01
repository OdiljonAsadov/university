@extends('layout.app')
@section('content')

<div><a class="btn btn-primary" style="width: 150px" href="/teacher"> Back</a></div>
    <div class="card card-primary col-md-8" style="margin-left: 15vw; margin-top: -5vh; height: 62vh">
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
        @foreach ($teachers as $teacher)
            <form action="/teacher/edit/{{ $teacher->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-4">Ism</label>
                        <input type="text" class="col-8 form-control" id="title" name="first_name"
                        value="{{ $teacher->first_name }}">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-4">Familiya</label>
                        <input type="text" class="col-8 form-control" id="title" name="last_name"
                        value="{{ $teacher->last_name }}">
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-4">Fan</label>
                        <input type="text" class="col-8 form-control" id="title" name="science"
                        value="{{ $teacher->science }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin: 0px 10px 15px 20px">Edit</button>
            </form>
        @endforeach
    </div>
@endsection
@extends('layout.app')
@section('content')

<div><a class="btn btn-primary" style="width: 150px" href="/groups">Back</a></div>
    <div class="card card-primary col-md-6" style="margin-left: 15vw; margin-top: -6vh; height: 73vh">
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
        @foreach ($groups as $group)
            <form action="/groups/edit/{{ $group->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{ $group->name }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="4">{{ $group->description }}</textarea>
                            </div>
                           
                </div>
                <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
            </form>
        @endforeach
    </div>
@endsection
@extends('layout.app')
@section('content')
    <div class="card card-primary col-md-11" style="margin-left: 0vw; margin-top: -2vh; height: 78vh">
        <div class="card-header" style="width: 100.5%; margin-left: 0px">
            <h3 class="card-title">Добавить продукт</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/room/add" method="post" enctype="multipart/form-data">
            @csrf
            {{ csrf_field() }}
            <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea class="form-control" name="description" cols="30" rows="4"></textarea>
                        </div>  
                        <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
                

            </div>
            
        </form>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration form</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" />

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <link rel="stylesheet" href="css/registration-style.css" /></head>

<body>

  <div class="main">
    <div class="container">
      <nav class="navbar navbar-expand-lg">

        <form class="d-flex" style="margin-left: 700px;">
          <a href="/" class="btn btn-outline-success mx-3" type="submit" >Bosh sahifaga qaytish</a>
          <a href="/login" class="btn btn-outline-success mx-3" type="submit" >Login</a>
          {{-- <button class="btn btn-outline-primary" type="submit">Registration</button> --}}
        </form>
      </nav>
      <div class="booking-content">
        <div class="booking-image">
          <img class="booking-img" src="images/student.jpg" alt="" />
        </div>
        <div class="booking-form">
          <div id="booking-form">
            <h2>Ro'yxardan o'tish</h2>
              <form action="/user/add" method="post">
                @if (Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                @endif
                @csrf
                {{ csrf_field() }}
                <div class="form-group form-input">
                  <input type="hidden" name="role_id" id="text" value="2" />
                  <input type="text" name="first_name" id="text" value="{{old('first_name')}}"/>
                  <label for="text" class="form-label">Ism</label>
                  <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="text" name="last_name" id="text" value="{{old('last_name')}}"/>
                  <label for="text" class="form-label">Familiya</label>
                  <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="email" name="email" id="email" value="{{old('email')}}"/>
                  <label for="email" class="form-label">Email</label>
                  <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="number" name="phone" id="phone" value="{{old('phone')}}"/>
                  <label for="phone" class="form-label">Telefon nomer</label>
                  <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="password" name="password" id="password" value="{{old('password')}}"/>
                  <label for="password" class="form-label">Parol</label>
                  <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="form-group form-input">
                  <input type="password" name="password" id="repassword" value="{{old('password')}}"/>
                  <label for="repassword" class="form-label">Parolni takrorlang</label>
                  <span class="text-danger">@error('password') {{$message}} @enderror</span>
                </div>
                <div class="form-submit">
                  <button type="submit" class="btn btn-primary" style="margin: 10px 10px 15px 20px">Добавить</button>
                  <a href="/login" class="vertify-booking">Login</a>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
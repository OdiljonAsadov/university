<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Login</title>

  <!-- Font Icon -->
  {{-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css" /> --}}

  <!-- Main css -->
  <link rel="stylesheet" href="css/login-style.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
  
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <div class="main">
    <div class="container">
      <div class="booking-content">
        <div class="booking-image">
          <img class="booking-img" src="images/student.jpg" alt="" />
        </div>
        <div class="booking-form">
          <form action="/table" id="booking-form" method="post">
             @if (Session::has('success'))
              <div class="alert alert-success">{{Session::get('success')}}</div>
             @endif
            @if (Session::has('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <h2>Login</h2>
            <div class="form-group form-input">
              <input type="email" name="email" id="email" value="{{old('email')}}" required />
              <label for="email" class="form-label">Your email</label>
              <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>

            <div class="form-group form-input">
              <input type="password" name="password" id="password" value="{{old('password')}}" required />
              <label for="password" class="form-label">Your password</label>
              <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="form-submit">
              <input type="submit" value="Login" class="submit" id="submit" name="submit" />
              <a href="/registration" class="vertify-booking">Agar ro'yxatdan o'tmagan bo'lsangiz</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
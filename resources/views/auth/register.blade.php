<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Overpass|Poppins:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/register.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col col-md-6 login-form-container">

            <div class="container">
                <div class="login-header">
                    <div class="container-fluid">
                        <div class="row header-group">
                            <div class="col col-sm-4  avatar-container">
                                <img src="{{asset('/img/RegisterAvatar.svg')}}" class="img-fluid avatar" alt="Avatar">
                            </div>
                            <div class="col col-sm-7 title-container">
                                <h4>Register Now</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group login-forms">
                    <input type="text" class="form-control" id="username" placeholder="Username">
                    <input type="email" class="form-control"   id="email" placeholder="Email">
                    <input type="password" class="form-control"  id="password" placeholder="Password" >
                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                    <div class="register-now">
                        <a href="{{route('register')}}" class="btn btn-lg btn-block register-btn">Register</a>
                    </div>
                    <p>Already have an account? Login Now!</p>
                    <a href="{{route('login')}}" class="btn btn-lg btn-block login-btn">Login</a>
                </div>
            </div>
        </div>
        <div class="col col-md-6 welcome-container text-center">
            <img src="{{asset('/img/registerpic.svg')}}"  class="img-fluid login-Pic" alt="RegisterPic">
            <h1 class="welcome-header">New Here?</h1>
            <h5 class="welcome-header">Register Now, and don't miss out this experience!</h5>
        </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
</html>

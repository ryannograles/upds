<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Overpass|Poppins:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/login-register.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-6 welcome-container text-center">
                <img src="{{asset('/img/LoginPic.svg')}}"  class="img-fluid login-Pic" alt="LoginPic">
                <h1 class="welcome-header">Welcome</h1>
                <h5 class="welcome-header">Get ready for a whole new experience!</h5>
            </div>
            <div class="col col-md-6 login-form-container">

                <div class="container">
                    <div class="login-header">
                        <div class="container-fluid">
                            <div class="row header-group">
                                <div class="col col-sm-4  avatar-container">
                                    <img src="{{asset('/img/profile-pic.svg')}}" class="img-fluid avatar" alt="Avatar">
                                </div>
                                <div class="col col-sm-7 title-container">
                                    <h4>Please Login</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="login-forms">
                        <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('student_id') is-invalid @enderror"  name="student_id" id="student_id" placeholder="Student_ID" required>

                                @error('student_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password" placeholder="Password" >
                                @error('password')
                                    <strong>{{ $message }}</strong>
                                @enderror

                                <div class="forgot">
                                    <p class="text-right">Forgot your Password? <a href="{{route('password.request')}}">{{ __('Click Here')}}</a></p>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-lg btn-block submit-btn">{{__('Login')}}</button>
                            <div class="register-now">`
                                <p class="text-center">Still have no account? REGISTER NOW</p>
                                <a href="{{route('register')}}" class="btn btn-lg btn-block register-btn">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
</html>

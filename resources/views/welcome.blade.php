<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDS</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass|Poppins:900&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header-section" id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="row">
                    <div class="col col-md-8">
                        <div class="navbar-brand">
                            <img src="{{asset('/img/XS_seal_update.png')}}" class="img-fluid XS-logo" alt="Logo">
                            <span class="navbar-text xs-initials">Xavier School Inc. <br> Greenhills West, San Juan, Metro Manila</span>
                        </div>
                    </div>
                    <div class="col col-md-4 ">
                        <div class="list-container ">
                            @guest
                            <ul class="navbar-nav ml-auto">
                                @if(Route::has('login'))
                                <li class="nav-item ">
                                    <a href="{{route('login')}}" class="nav-link login">Login</a>
                                </li>
{{--                                @if(Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{route('register')}}" class="nav-link register">Register</a>--}}
{{--                                </li>--}}
{{--                                    @endif--}}
                                    @endif
                                @else
                                    <a href="#" id="navbarDropdown" class="nav-item dropdown-toggle user-now" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                            {{Auth::user()->student_id}} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                    @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid">
           <div class="row">
               <div class="col col-md-6 header-text">
                   <div class="container-fluid">
                       <div class="main-header-text  text-justify">
                           <h1>Xavier School</h1>
                           <h1>Updating System</h1>

                           <p>An easy and convenient way to update your info's On-The-Go</p>

                           <div class="header-button-group text-left">
                               <a href="{{route('login')}}" class="btn try-button" >GO TO UPDATING SYSTEM</a>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-md-6 header-image">
                   <img src="{{asset('/img/gadgets.png')}}" class="img-fluid gadgets" alt="Gadgets">
               </div>
           </div>
        </div>
    </section>
</body>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>

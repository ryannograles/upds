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
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item ">
                                    <a href="{{route('login')}}" class="nav-link login">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('register')}}" class="nav-link register">Register</a>
                                </li>
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
                               <a href="{{route('login')}}" class="btn try-button" >Try It Now</a>
                               <a href="#" class="btn learn-more">Learn More</a>
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

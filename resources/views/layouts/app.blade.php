<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'XS_UPDS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/menutoggle.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/simple-sidebar.css') }}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="sidebar border-light" id="sidebar-wrapper">
        <div class="sidebar-heading">
                <div class="navbar-brand">
                    <div class="row">
                        <div></div>
                    </div>
                    <img src="{{asset('img/XS_seal_update.png')}}" alt="Logo">
                    <div class="text-left navbar-text text-heading">
                        <h3 style="font-size: 20px;">Xavier School<br>Updating System</h3>
                    </div>
                </div>
        </div>
        <div class="list-group">
            <a href="{{route('dashboard')}}" class="list-group-item list"><i class="fas fa-columns" style="margin-right: 10px"></i>Dashboard</a>
{{--            <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>--}}
{{--            <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>--}}
{{--            <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>--}}
{{--            <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>--}}
{{--            <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>--}}
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg  border-bottom navigation-bar">
            <button class="btn btn-outline-light" id="menu-toggle"><i class="fas fa-align-left"></i></button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle user-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Welcome
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Logout</a>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            @yield('content')
        </div>
{{--        <footer class="container-fluid">--}}
{{--            <p>VLCT.co all trademarks reserved for 2020</p>--}}
{{--        </footer>--}}
    </div>
</div>
</body>

</html>

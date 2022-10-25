<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"  media="screen,projection"/>
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('css/custom.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

    <style>
        .input-field div.error {
            color: brown;
        }
        @media only screen and (max-width: 600px) {
            nav {
                height: 64px;
                line-height: 64px;
            }
        }
    </style>
    @stack('custom-style')
    
</head>
<body>
<div id="app">
        @include('layouts.nav')
        <main class="main">
      
            
            @yield('content')
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal darken-4">
                <i class="large material-icons">camera</i>
                </a>
                <ul>
                    <li><a href="#" class="btn-floating btn tooltipped blue" data-position="left" data-tooltip="Documents"><i class="material-icons">attach_file</i></a></li>
                    
                    <li><a href="#" class="btn-floating btn tooltipped deep-purple" data-position="left" data-tooltip="Profile"><i class="material-icons">account_box</i></a></li>

                    <li>
                    <a class="btn-floating btn tooltipped red" data-position="left" data-tooltip="Logout" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="material-icons">exit_to_app</i></a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </ul>
            </div>
        </main>
    </div>

     <!--materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/init.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
    @stack('custom-script')
</body>
</html>

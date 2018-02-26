<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--  <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
    {{--  Font awesome icons  --}}
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    {{--  <!-- Latest compiled and minified CSS -->  --}}
    {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  --}}
    {{--  Link to Bulma CSS   --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
   
    <div class="container is-fluid">
    {{--  Here is the nav bar that includes the user login options  --}}
        <div class="block">
            <nav class="navbar">
                <!-- Left Side Of Navbar -->
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ url('/') }}"><h1 class="title is-2"> Hot Cutz</h1></a>
                        {{--  {{ config('app.name', 'Hot Cutz') }}  --}}
                </div>
                <!-- Center Of Navbar -->
                <div class="navbar-start">
                    <a href="" class="navbar-item"> <span class="icon"><i class="fab fa-twitter">
                            </i>
                        </span>
                    </a>
                <!-- Right Side Of Navbar -->
                <div class="navbar-end navbar-menu is-active">
                    <!-- Authentication Links -->
                    @guest
                        <a class="navbar-item" href="{{ route('login') }}">Login</a> 
                        <a class="navbar-item" href="{{ route('register') }}">Register</a>
                    @else
                        <a class="navbar-item">{{ Auth::user()->name }}</a>
                        <a class="navbar-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                    @endguest
                </div>          
            </nav>
        </div>
    </div>

        {{--  Here is the content of the page.  --}}
        <div class="container is-fluid">
                @yield('content')
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

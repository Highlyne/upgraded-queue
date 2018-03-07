<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--  <!-- Latest compiled and minified CSS -->  --}}
    {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">  --}}

 
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Shrikhand|Special+Elite" rel="stylesheet">
    {{--  Link to Normalize CSS   --}}
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    {{--  Font awesome icons  --}}
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    {{--  Link to Bulma CSS   --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.css">
    {{--  Link to My style sheet   --}}
    <link href="{{ asset('css/styleSheet.css') }}" rel="stylesheet">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Email JavaScript  -->
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript">
       (function(){
          emailjs.init("user_wac982DMbuwf2nYGoJKLx");
       })();
    </script>
  
</head>
<body>
   
    <div class="container is-fluid">
    {{--  Here is the nav bar that includes the user login options  --}}
        <div class="block">
                    <nav class="navbar is-dark is-mobile">
                    
                            <!-- Left Side Of Navbar -->
                            {{--  <div class="navbar-brand">
                                <div class="navbar-item">
                                    <a href="{{ url('/') }}"><h1 class="title is-2"> Hot Cutz</h1></a>  --}}
                                    {{--  {{ config('app.name', 'Hot Cutz') }}  --}}
                        
                            <!-- Center Of Navbar -->
                            <div class="navbar-brand">
                                    <a href="{{ url('/') }}"><h3> Hot Cutz </h3></a>
                            </div>

                            <div class="navbar-start is-mobile">
                                    <a href="/contact" class="navbar-item"><span class="icon"><i class="fas fa-link"></i></span><p>Link Up</p></a>
                            </div>
                            <!-- Right Side Of Navbar -->
                            <div class="navbar-end navbar-menu is-active">
                                <!-- Authentication Links -->
                                @guest
                                    <a href="/book" class="button is-primary is-focused" role="button">Book Now</a>
                                    <a class="navbar-item" href="{{ route('login') }}">Login</a> 
                                    <a class="navbar-item" href="{{ route('register') }}">Register</a>
                                @else
                                    <a href="/book" class="button is-primary is-focused" role="button">Book Now</a>
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
                        </div>
                    </nav> 
        </div>
    </div>

        {{--  Here is the content of the page.  --}}
        <div class="container is-fluid">
                @yield('content')
        </div>

    <footer class="footer is-paddingless">
        <div class="container">
            <div class="content has-text-centered">
                    <a href="/admin"><h5>
                   Admin 
                </h5></a>
            </div>
        </div>
    </footer>        
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        var d = new Date();
        var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
        document.getElementById("date").innerHTML = days[d.getDay()];
    </script>
    <script>
        function initMap() {
            var uluru = {lat: 28.6668, lng: -81.3773};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: uluru
            });
            var marker = new google.maps.Marker({
            position: uluru,
            map: map
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiiqjd1K0iSiVBQv8FiLozf2YHiheo6_M&callback=initMap">
    </script>
      

</body>
</html>

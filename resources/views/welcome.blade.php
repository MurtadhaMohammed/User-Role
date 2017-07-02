<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        

        <!-- Styles -->
         <link href="{{ asset('css/app.css')}}" rel="stylesheet" type="text/css">
         <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css">
      
    </head>
    <body>
       <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
            
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            @if(Auth::check())

                                @if(Auth::user()->hasRole('Admin'))
                                <li><a href="{{ asset('/home')}}">home</a></li>
                                <li><a href="{{ asset('/editor')}}">editor</a></li>
                                <li><a href="{{ asset('/control')}}">control</a></li>
                                @endif

                                @if(Auth::user()->hasRole('Editor'))
                                <li><a href="{{ asset('/home')}}">home</a></li>
                                <li><a href="{{ asset('/editor')}}">editor</a></li>
                                @endif

                                @if(Auth::user()->hasRole('User'))
                                <li><a href="{{ asset('/home')}}">home</a></li>
                                @endif

                            <li><a href="">{{(Auth::user()->name)}}</a></li>
                            <li><a href="{{ asset('/logout')}}">logout</a></li>
                            @else
                        
                            <li><a href="{{ asset('/login')}}">Login</a></li>
                            <li><a href="{{ asset('/register')}}">Register</a></li>
                            @endif
                        
                    </ul>
    
                </div>
            </div>
        </nav>
     @yield('content')

     <script src="{{ asset('js/app.js')}}" ></script>
     <script src="{{ asset('js/jquery.backstretch.min.js')}}"></script>
     <script src="{{ asset('js/plugin.js')}}" ></script>
    </body>
</html>

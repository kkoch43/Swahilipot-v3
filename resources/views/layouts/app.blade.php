<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sph-custom.css') }}" rel="stylesheet">
    @yield('style')

    <style>
    .dropdown-header{
      font-size: 14px;
    }
    .dropdown-toggle{
      padding: 5px 0px 0px 0px !important;
    }
    .dropdown-toggle img{
      width: 40px;
      height: 40px;
    }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
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
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                          @if (Auth::user()->usertype == 'super')
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                          @endif

                            <li class="dropdown">
                                {{-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> --}}
                                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href="#">
                                  <img class="img-circle" alt="{{ Auth::user()->name }}" src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim(Auth::user()->email))) }}" >
                                  <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">

                                  <li class="dropdown-header">Signed In as <strong>{{ Auth::user()->name }}</strong></li>
                                  <li role="separator" class="divider"></li>
                                  @if (Auth::user()->usertype == 'super')
                                      <li><a href="{{ route('admin.profile') }}">Your Profile</a></li>
                                      <li><a href="{{ route('admin.settings') }}">Settings</a></li>
                                  @else
                                      <li><a href="{{ route('members.profile') }}">Your Profile</a></li>
                                      <li><a href="{{ route('members.settings') }}">Settings</a></li>
                                  @endif

                                  <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/sph-custom.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('assets/blog/img/favicon.ico') }}">
    <title>@yield('title', 'Blog')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/blog/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/blog/css/mediumish.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Begin Nav
    ================================================== -->
    <nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <!-- Begin Logo -->
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/blog/img/logo.png') }}" alt="logo">
            </a>
            <!-- End Logo -->
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <!-- Begin Menu -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/">Stories <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Request::is('post') ? 'active' :  ''}}">
                        <a class="nav-link" href="{{ route('post') }}">Post</a>
                    </li>
                    <li class="nav-item {{ Request::is('author') ? 'active' :  ''}}">
                        <a class="nav-link" href="{{ route('author') }}">Author</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link bg-green rounded-pill" href="{{ route('login') }}">Get Started</a>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endauth
                </ul>
                <!-- End Menu -->
                <!-- Begin Search -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25">
                            <path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z">
                            </path>
                        </svg></span>
                </form>
                <!-- End Search -->
            </div>
        </div>
    </nav>
    <!-- End Nav
    ================================================== -->

    <!-- Begin content
    ================================================== -->
    @yield('content')

    <!-- End content
    ================================================== -->

    @guest
    <!-- Begin AlertBar
    ================================================== -->
    <div class="alertbar">
        <div class="container text-center">
            <img src="assets/blog/img/logo.png" alt="logo"> &nbsp; Register or log in and start creating your own <b>stories</b>. <a href="{{ route('login') }}" class="btn subscribe">Get Started</a>
        </div>
    </div>
    <!-- End AlertBar
    ================================================== -->
    @endguest

    <!-- Begin Footer
	================================================== -->
    <div class="container footer">
        <p class="pull-left">
            Copyright &copy; {{ now()->format('Y') }} Blog
        </p>
        <p class="pull-right">
            Blog website By <a target="_blank" href="https://github.com/JuanKno">Juankno</a>
        </p>
        <div class="clearfix">
        </div>
    </div>
    <!-- End Footer
	================================================== -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="assets/blog/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
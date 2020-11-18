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
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/blog/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>



    <!-- Begin content
    ================================================== -->
    <div id="app">
        <blog-component></blog-component>
    </div>

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

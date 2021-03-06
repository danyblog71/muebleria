<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <title>@yield('page-title') - Muebleria</title>
        @yield('page-css')
    </head>
    <body>
        <div class="app-admin-wrap layout-sidebar-large clearfix">
            @include('navbar')
            <div class="main-content-wrap sidenav-open d-flex flex-column">
                @yield('breadcrumbs')
                @yield('content')
                <!--include('layouts.footer')-->
            </div>
        </div>
        @yield('script')
        <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>
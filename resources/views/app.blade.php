<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Folio - Backend</title>

    <link href="{{ asset('/backend/assets/admin1/css/admin1.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/assets/globals/css/elements.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/assets/globals/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/assets/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::asset('assets/css/MDicon.min.css')}}"/>
    <link href="{{ asset('/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/summernote/summernote-bs3.css') }}" rel="stylesheet">
    <link href="{{ asset('/backend/css/style.css') }}" rel="stylesheet">
    @yield('header-stuff')

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>
<div id="wrapper">

    <!-- Navigation -->
    @if(Auth::Check())
        @include('nav')
    @endif

                <!-- Page Content -->
        <div class="content">
            @if(Auth::Check())
                @yield('page-header')
            @endif
            <!--.page-header-->

            <!-- content -->
            <div class="row">
                @include('flash::message')
                @yield('content')
            </div>
            <!-- content -->


            <!--.footer-links-->

        </div>

        <!-- Scripts -->
        <script src="/backend/assets/globals/js/global-vendors.js"></script>
        <script src="/backend/assets/globals/js/pleasure.js"></script>
        <script src="{{ asset('/backend/summernote/summernote.min.js') }}"></script>
        <script src="{{ asset('/backend/assets/admin1/js/layout.js') }}"></script>

        <!-- BEGIN INITIALIZATION-->
        <script>
            $(document).ready(function () {
                Pleasure.init();
                Layout.init();
            });
        </script>
        <!-- END INITIALIZATION-->
        @yield('footer-js')
        <script>
            setTimeout(function () {
                $('#flash-msg-div').addClass('fadeOut');
            }, 5000);
        </script>
</body>
</html>

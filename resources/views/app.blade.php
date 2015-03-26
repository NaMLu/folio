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

        @include('nav')

        <!-- Page Content -->
        <div class="content">

            <div class="page-header full-content">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Blank Page <small>short description</small></h1>
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.page-header-->

            <!-- content -->
            <div class="row">
                @include('flash::message')
                @yield('content')
            </div>
            <!-- content -->

            <div class="footer-links margin-top-40">
                <div class="row no-gutters">
                    <div class="col-xs-6 bg-indigo">
                        <a href="pages-timeline.html">
                            <span class="state">Pages</span>
                            <span>Timeline</span>
                            <span class="icon"><i class="ion-android-arrow-back"></i></span>
                        </a>
                    </div><!--.col-->
                    <div class="col-xs-6 bg-cyan">
                        <a href="components-offline-detector.html">
                            <span class="state">Components</span>
                            <span>Offline Detector</span>
                            <span class="icon"><i class="ion-android-arrow-forward"></i></span>
                        </a>
                    </div><!--.col-->
                </div><!--.row-->
            </div><!--.footer-links-->

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
        setTimeout(function(){
            $('#flash-msg-div').addClass('fadeOut');
        }, 5000);
    </script>
</body>
</html>

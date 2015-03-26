@extends('app')
@section('page-header')
    <div class="page-header full-content">
        <div class="row">
            <div class="col-sm-6">
                <h1>Dashboard Home
                    <small>Home</small>
                </h1>
            </div>
            <!--.col-->
        </div>
        <!--.row-->
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row animated fadeIn">

            <div class="col-md-3">
                <div class="panel red">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>RED</h4></div>
                    </div><!--.panel-heading-->
                    <div class="panel-body">
                        <p>Collaboratively administrate empowered markets via plug-and-play networks.</p>
                    </div><!--.panel-body-->
                </div><!--.panel-->
            </div><!--.col-->

            <div class="col-md-3">
                <div class="panel pink">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>PINK</h4></div>
                    </div><!--.panel-heading-->
                    <div class="panel-body">
                        <p>Collaboratively administrate empowered markets via plug-and-play networks.</p>
                    </div><!--.panel-body-->
                </div><!--.panel-->
            </div><!--.col-->

            <div class="col-md-3">
                <div class="panel purple">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>PURPLE</h4></div>
                    </div><!--.panel-heading-->
                    <div class="panel-body">
                        <p>Collaboratively administrate empowered markets via plug-and-play networks.</p>
                    </div><!--.panel-body-->
                </div><!--.panel-->
            </div><!--.col-->

            <div class="col-md-3">
                <div class="panel deep-purple">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>DEEP PURPLE</h4></div>
                    </div><!--.panel-heading-->
                    <div class="panel-body">
                        <p>Collaboratively administrate empowered markets via plug-and-play networks.</p>
                    </div><!--.panel-body-->
                </div><!--.panel-->
            </div><!--.col-->

        </div>

    </div>
@endsection

@section('footer-js')
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
@endsection

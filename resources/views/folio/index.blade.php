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
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title"><h4>{{$item->name}}</h4></div>
                        </div>
                        <!--.panel-heading-->
                        <div class="panel-body without-padding">
                            <div class="list-gallery">
                                <div class="card tile card-black card-image bg-image sample-bg-image8 margin-0">
                                </div>
                                <!--.card-->
                            </div>
                            <!--.row-->
                        </div>
                        <!--.panel-body-->
                        <div class="panel-footer footer-dark footer-translucent" style="width: 100%; min-height: 20px;">
                            @foreach($item->categories as $cat)
                                <span class="label label-primary">{{$cat->name}}</span>
                            @endforeach
                        </div>
                        <!--.panel-footer-->
                    </div>
                    <!--.panel-->
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footer-js')
    <script>

    </script>
@endsection

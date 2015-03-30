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
                <div class="col-md-3 animated FadeIn">
                    <div class="panel indigo">
                        <div class="panel-heading text-center">
                            <div class="panel-title">
                                <h5 class="small text-center">{{$item->name}}</h5>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img class="img img-responsive" src="/assets/images/portfolio/img3.jpg" alt=""/>
                        </div>
                        <div class="panel-footer">
                            <div class="small pull-left">
                                <i class="ion-calendar"></i> : {{ Carbon::parse($item->created_at)->toFormattedDateString() }}
                            </div>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footer-js')
    <script>

    </script>
@endsection

@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All my work</h1>
            </div>
        </div>
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-3 animated zoomIn">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center"><h5 class="small">{{$item->name}}</h5></div>
                        <div class="panel-body">
                            <img class="img img-responsive"  src="/assets/images/portfolio/img3.jpg" alt=""/>
                        </div>
                        <div class="panel-footer">
                           <div class="small pull-right">
                                Posted on : {{ Carbon::parse($item->created_at)->toFormattedDateString() }}
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

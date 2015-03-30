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
            @foreach($skills as $skill)
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$skill->percentage}}%;">{{$skill->name}}</div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footer-js')
    <script>

    </script>
@endsection

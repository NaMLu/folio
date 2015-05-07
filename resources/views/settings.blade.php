@extends('app')
@section('page-header')
    <div class="page-header full-content">
        <div class="row">
            <div class="col-sm-6">
                <h1>Site Settings
                    <small>Configs</small>
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
            <!--.col-->
            <div class="col-md-12">
                <div class="panel indigo">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>settings</h4></div>
                    </div>
                    <!--.panel-heading-->
                    <form enctype="multipart/form-data" class="" role="form" method="POST"
                          action="{{ url('/settings') }}">
                        <div class="panel-body">
                            <div class="row">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                @foreach( $settings as $setting)
                                    <div class="col-md-6">
                                        <label style="text-decoration: underline"
                                               for="{{$setting->name}}">{{$setting->name_string}}</label>

                                        <div class="inputer ">
                                            <div class="input-wrapper">
                                            <textarea class="form-control js-auto-size" name="{{$setting->id}}"
                                                      rows="1"
                                                      placeholder="Autosize textarea">{{$setting->value}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!--.panel-body-->
                            <div class="panel-footer">
                                <button class="btn btn-default btn-block btn-blue btn-ripple">
                                    Save Settings
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--.panel-->
                </div>

            </div>

        </div>
    </div>
@endsection

@section('footer-js')

@endsection

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
            <div class="col-md-4">
                <div class="panel blue">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>Some Data Here</h4></div>
                    </div>
                    <!--.panel-heading-->
                    <div class="panel-body">
                        <p>This is a placeholder.</p>
                    </div>
                    <!--.panel-body-->
                </div>
                <!--.panel-->
            </div>
            <!--.col-->
            <div class="col-md-8">
                <div class="panel indigo">
                    <div class="panel-heading">
                        <div class="panel-title"><h4>Skills</h4></div>
                    </div>
                    <!--.panel-heading-->
                    <div class="panel-body">
                        @foreach($skills as $skill) <div class="row">
                            <div class="col-md-10">
                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-info" role="progressbar"
                                     aria-valuenow="{{$skill->percentage}}" aria-valuemin="0" aria-valuemax="100"
                                     style="width: {{$skill->percentage}}%;">{{$skill->name}}</div>

                            </div>
                                
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-sm btn-primary" href="/skills/{{$skill->id}}/delete"> delete</a>
                            </div>
                        </div>
                    
                        @endforeach
                    </div>
                    <!--.panel-body-->
                    <div class="panel-footer">
                        <button class="btn btn-default btn-block btn-blue btn-ripple" data-toggle="modal"
                                data-target="#createSkillModal">Add new
                        </button>
                    </div>
                </div>
                <!--.panel-->
            </div>

        </div>

    </div>
    <!-- Modal -->
    <div class="modal" id="createSkillModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content animated zoomIn">
                <div class="modal-header">
                    <h4 class="modal-title">New Skill</h4>
                </div>
                <div class="modal-body">
                    <form enctype="multipart/form-data" class="" id="addskill" role="form" method="POST"
                          action="{{ url('/skills') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="" for="name">Name</label>

                            <div class="input-group">
                                <div class="input-group-addon"><i class="ion-lock-combination"></i></div>
                                <input type="text" name="name" class="form-control" id="name"
                                       placeholder="What skill?" value="{{Input::old('name')}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="" for="name">Percentage</label>

                            <div class="input-group">
                                <div class="input-group-addon"><i class="ion-bonfire"></i></div>
                                <input type="text" name="percentage" class="form-control" id="link"
                                       placeholder="How well do you know this isht?"
                                       value="{{Input::old('percentage')}}">
                            </div>
                        </div>
                        <hr/>
                        <input type="submit" class="btn btn-primary btn-block" value="Add Skill"/>
                    </form>
                </div>
            </div>
            <!--.modal-content-->
        </div>
        <!--.modal-dialog-->
    </div><!--.modal-->
@endsection

@section('footer-js')
    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
    <script>
        $("#addskill").submit(function (event) {
            event.preventDefault();
            $('#createSkillModal').modal('hide');
            var inputs = $("#addskill").serializeArray();
            $.post("/skills",
                    inputs,
                    function (data) {
                        console.log(data);
                        $.growl.notice({ title: "Successful!!", message: "The Skill was Saved!" });
                    });
        });
    </script>
@endsection

@extends('app')

@section('page-header')
    <div class="page-header full-content">
        <div class="row">
            <div class="col-sm-6">
                <h1>Dashboard:
                    <small>Create New Portfolio Item</small>
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
            <div class="col-md-10 col-md-offset-1">
                <div class="panel blue">
                    <div class="panel-heading text-center"><h5>create new</h5></div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form enctype="multipart/form-data" class="" role="form" method="POST"
                              action="{{ url('/portfolio') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">Name</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                                            <input type="text" name="name" class="form-control" id="name"
                                                   placeholder="Name" value="{{Input::old('name')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">Link</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                            <input type="text" name="link" class="form-control" id="link"
                                                   placeholder="URL to the project" value="{{Input::old('link')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">Quote</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-quote-left"></i></div>
                                            <input type="text" name="quote" class="form-control" id="quote"
                                                   placeholder="famous quote, init?" value="{{Input::old('quote')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">Famous person</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                            <input type="text" name="person" class="form-control" id="person"
                                                   placeholder="who said that?" value="{{Input::old('person')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <fieldset>
                                <legend>Description[prose] of the project</legend>
                                <textarea class="summernote"  name="description">{{Input::old('description')}}</textarea>
                            </fieldset>
                            <hr/>
                            <fieldset>
                                <legend>
                                    Choose project categories
                                </legend>
                                <div>
                                    @foreach($categories as $key => $value)
                                        <label>
                                            <input type="checkbox" class="lbl padding-8" name="categories[]"
                                                   id="inlineCheckbox"
                                                   value="{{$key}}">
                                            <span class="lbl padding-8">{{$value}}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </fieldset>
                            <hr/>
                            <fieldset>
                                <legend>upload images</legend>
                                {!! Form::file('images[]', ['multiple'=>true, 'class'=> 'form-control' ]) !!}
                            </fieldset>
                            <hr/>
                            <input type="submit" class="btn btn-primary btn-block" value="Add a project"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer-js')
    <script>
        $('.summernote').summernote({
            height: "150px",
            toolbar: [
                //[groupname, [button list]]

                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
            ]
        });
        var postForm = function () {
            var description = $('textarea[name="description"]').html($('#summernote').code());
        }
    </script>
@endsection

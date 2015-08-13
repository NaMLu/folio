@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading text-center"><h5>Edit</h5></div>
                    <div class="panel-body">

                        <form class="" role="form" method="put" action="{{ url('/portfolio/update') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">Name</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
                                            {!! Form::text('name', @$work->name, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">Link</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                            {!! Form::text('link', @$work->link, ['class'=>'form-control']) !!}
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
                                            {!! Form::text('quote', @$work->quote, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="" for="name">Famous person</label>

                                        <div class="input-group">
                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                             {!! Form::text('person', @$work->person, ['class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <fieldset>
                                <legend>Description[prose] of the project</legend>
                                <div class="summernote">
                                    {!! HTML::entities( @$work->description) !!}
                                </div>
                            </fieldset>
                            <hr/>
                            <fieldset>
                                <legend>
                                    Choose project categories
                                </legend>
                                <div>
                                    @foreach($categories as $key => $value)
                                        <label>
                                            <input type="checkbox" class="lbl padding-8" name="categories[]" id="inlineCheckbox"
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
                            <input type="submit" class="btn btn-primary btn-block" value="Update project"/>
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

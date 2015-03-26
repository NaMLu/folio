@extends('app')

@section('content')
    <style>
        .content{
            padding:0 !important;
        }
        .panel-login{
        background: rgba(0, 0, 0, 0.4);
        }
    </style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 login-box login-screen">
			<div class=" panel-login blur-content animated fadeInUp">
				<div class="panel-heading text-center"><h3>Login</h3></div>
				<div class="panel-body">
					<form class="form" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class=" control-label">E-Mail Address</label>
								<input type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="off">
						</div>

						<div class="form-group">
							<label class=" control-label">Password</label>
								<input type="password" class="form-control" name="password">
						</div>

						{{--<div class="form-group">--}}
							{{--<div class="col-md-6 col-md-offset-4">--}}
								{{--<div class="checkbox">--}}
									{{--<label>--}}
										{{--<input type="checkbox" name="remember"> Remember Me--}}
									{{--</label>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}

						<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Login</button>

								{{--<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>--}}
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

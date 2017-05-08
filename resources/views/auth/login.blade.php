@extends('app')
@section('styles')
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">@lang('login.attributes.login')</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							Por favor corrige los siguientes errores:<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{route('login')}}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('login.attributes.email') }}</label>
							<div class="col-md-6">
							<input type="email" name="email" class="form-control" value="{{old('email')}}" />
							</div>
						</div>
						<input type="hidden" name="_token" value="{{csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('login.attributes.password') }}</label>
							<div class="col-md-6">
								<input type="password" name="password" class="form-control"   />
						    	
							</div>
						</div> 
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-success pull-right"  >
									Enter
								</button>

								 <a href="forgotPassword">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
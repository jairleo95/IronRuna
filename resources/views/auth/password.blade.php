@extends('app')

@section('content')
<div class="container-fluid" style="margin-top: 40px">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading text-center" >Reset Password</div>
				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="/password/email">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<label class="control-label">E-Mail Address</label>
					 
													 
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							 
						<div class="">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Reset Password
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('webPage.main')

@section('styles')

	<link href="css/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" media="screen" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('content')
	<!-- Heading Start -->
	<section class="page-heading haslayout">
		<div class="container">
			<div class="row">
				<h1>Inscripción</h1>
			</div>
		</div>
	</section>
	<!-- Heading End -->
<div class="container content">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<!--<div class="panel-heading">Primero registrate a nuestra pagina web</div>-->
				<div class="panel-body">
					<form class="form-horizontal formUserRegister" role="form" method="POST" action="{{route('register')}}">
						<input type="hidden" name="_token" value="{{csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.fullName')  </label>
							<div class="col-md-6">
								<input type="text" class="form-control input-sm" name="fullName" value="{{ old('fullName') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.lastName')</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-sm" name="lastName" value="{{ old('lastName') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.email')</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-sm" name="email" value="{{ old('email') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.password')</label>
							<div class="col-md-6">
								<input type="password" class="form-control input-sm" name="password">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.confirmPassword')</label>
							<div class="col-md-6">
								<input type="password" class="form-control input-sm" name="confirmPassword">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.gender.gender')</label>
							<div class="col-md-6">
								<div class="radio">
									<label><input type="radio" value="1" name="gender">@lang('register.attributes.gender.male')</label>
								</div>
								<div class="radio">
									<label>	<input type="radio" value="2" name="gender">@lang('register.attributes.gender.female')</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.address')</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-sm" name="address">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.district')</label>
							<div class="col-md-6">
								<select name="district" class="form-control input-sm">
									<option value="1">Seleccione</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.province')</label>
							<div class="col-md-6">
								 
								<select name="province" class="form-control input-sm">
									<option value="1">Seleccione</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.department')</label>
							<div class="col-md-6 selectContainer" >
								<select name="department" class="form-control input-sm">
									<option value="1">Seleccione</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.country')</label>
							<div class="col-md-6 selectContainer" >
								<select name="country" class="form-control input-sm">
									<option value="1">Perú</option>
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.documentType')</label>
							<div class="col-md-6 selectContainer">
								<select name="documentType" class="form-control input-sm documentType">
									<option value="1">DNI</option>
									<option value="2">Pasaporte de Extranjería</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.documentNumber')</label>
							<div class="col-md-6">
								<input class="form-control input-sm" name="documentNumber" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.cellphone')</label>
							<div class="col-md-6">
								<input class="form-control input-sm" name="cellphone" type="text" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.phone')</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-sm" name="phone">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.birthdate')</label>
							<div class="col-md-6">
                                <div class="input-group input-append dates">
                                      <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                    <input class="form-control input-sm birthDate"  name="birthdate" type="text" data-mask="99/99/9999" data-mask-placeholder= "_"  />
                                </div>
                            </div>
						</div>
						<!--Aditional data-->
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.category')</label>
							<div class="col-md-6 selectContainer" >
								<select name="category" class="form-control input-sm">
									<option value="1">Seleccione</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.observation')</label>
							<div class="col-md-6" >
								  <textarea class="form-control" name="observation" rows="5" style="resize: none;"></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.emergencyPhone')</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-sm" name="emergencyPhone">
							</div>
						</div>
							<div class="form-group">
							 <label class="col-md-4 control-label"></label>
							<div class="col-md-6">
                               <div class="g-recaptcha pull-right" data-sitekey="6Le_NCAUAAAAAAQwX48E9wq5mMCBzUnPkRJPhnfq"></div>
                            </div>
					 
						 </div>
						<footer>
								<button type="submit" class="btn btn-success pull-right">
									@lang('register.attributes.btnRegister') <i class="fa fa-send"></i>
								</button>
						</footer>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12 competitor-img">
			<img src="images/img18.png" alt="image description" class="pull-right">
		</div>
	</div>
</div>
@endsection
@section('scripts')
 
	 <script src='https://www.google.com/recaptcha/api.js'></script>
	 <script src='js/businessLogic/userRegister.js'></script>
	<script>
	$(function () {
            var pageFunction= function (){
                loadFormPlugins(initFormUserRegister);

            };
            pageFunction();
        });
	</script>
@endsection
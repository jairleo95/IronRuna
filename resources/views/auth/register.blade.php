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
	<script>
		function initFormUserRegister(){
            $('.birthDate').datetimepicker({
                locale: 'es',
                format: 'D/MM/YYYY'
            });
            $('.formUserRegister').bootstrapValidator({
                message: 'Este valor es inválido',
                framework : 'bootstrap',
                excluded : ':disabled',
				feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },  fields: {
							fullName:{
								message: 'Ingrese sus nombres',
								validators: {
									notEmpty: {
										message: 'Los nombres son requeridos y no puede estar vacio'
									},
									stringLength: {
										max: 50,
										message: 'Los nombres no pueden tener mas de 50 caracteres.'
									},
									regexp: {
                                        regexp: onlyLettersWithSpacesRegex,
                                        message: 'Los nombres solo pueden contener letras'
                                    }
								}
							},
							lastName:{
								message: 'Ingrese sus apellidos',
								validators: {
									notEmpty: {
										message: 'Los apellidos son requeridos y no puede estar vacio'
									},
									stringLength: {
										max: 50,
										message: 'Los apellidos no pueden tener mas de 50 caracteres.'
									},
											regexp: {
												regexp: onlyLettersWithSpacesRegex,
												message: 'Los Apellidos solo pueden contener letras'
											}
								}
							},
                    email: {
                        message: 'Ingrese un email',
                        validators: {
                            notEmpty: {
                                message: 'El email no puede estar vacio'
                            },
                            stringLength: {
                                min: 6,
                                max: 50,
                                message: 'El email de usuario debe tener más de 6 y menos de 50 caracteres.'
                            },
							remote: {
							 url: 'isValidUserName',
							 message: 'El correo ya ha sido registrado'
							 },
                            regexp: {
                                regexp: emailRegex,
                                message: 'Debe ingresar un email'
                            }
                        }
                    }, password: {
                        validators: {
                            notEmpty: {
                                message: 'La contraseña no puede estar vacio'
                            },
                            stringLength: {
                                min: 8,
                                max: 20,
                                message: 'La contraseña de usuario debe tener más de 8 y menos de 20 caracteres'
                            },
                            regexp: {
                                regexp: strongPasswordRegex,
                                message: 'La contraseña debe tener letras (A-Z, a-z), por lo menos numeros (0-9) y por lo menos caracteres especiales (@&%”.).'
                            }
                        }
                    },
                    confirmPassword: {
                        validators: {
                            notEmpty: {
                                message: 'La contraseña no puede estar vacio'
                            },
                            identical: {
                                field: 'password',
                                message: 'La contraseña y su confirmación no son los mismos'
                            }
                        }
                    },
					gender:{
                            validators:{
                                notEmpty:{
                                    message:'El género es obligatorio.'
								}
							}
					},
					address:{
                            validators:{
                                notEmpty:{
                                    message:'La dirección de domicilio es obligatorio.'
								}
							}
					},
					district:{
                            validators:{
                                notEmpty:{
                                    message:'El distrito del domicilio es obligatorio.'
								}
							}
					},
					province:{
                            validators:{
                                notEmpty:{
                                    message:'La provincia del domicilio es obligatorio.'
								}
							}
					},
					department:{
                            validators:{
                                notEmpty:{
                                    message:'El departamento del domicilio es obligatorio.'
								}
							}
					},
					country:{
                            validators:{
                                notEmpty:{
                                    message:'El país es obligatorio.'
								}
							}
					},
					cellphone:{
                            validators:{
                                notEmpty:{
                                    message:'El número de contácto es obligatorio.'
								} ,callback: {
                                    message: 'Ingrese el formtamo correcto, Ejemp: +51-0955250060',
                                    callback: cellphoneRegexCallback
                                }
							}
					},
					phone:{
                            validators:{
                                notEmpty:{
                                    message:'El telefono es obligatorio.'
								}
							}
					},

                    documentType:{
                            validators:{
                                notEmpty:{
                                    message:'Seleccione un tipo de documento'
                                }
                            }
                    },
                    documentNumber:{

                            validators:{
                                notEmpty:{
                                    message:'El número de documento es obligatorio.'
                                },
                                stringLength: {
                                    min: 8,
                                    max: function (value, validator, $field) {
                                        var d = $('.documentType').val();
                                        var x =(d==='1'?8:10);
                                        return x;
                                    }
                                },
                                callback:fvCallbackDocumentNumberByDocumentType
                            }
                    },birthdate:{
                        validators:{
                            notEmpty:{
                                message:'La fecha de nacimiento es obligatorio.'
                            } ,date: {
                                format: 'DD/MM/YYYY',
                                message: 'The date is not a valid'
                            },
                        callback: {
                            message: 'Su edad es menor a 18 años',
                            callback: function(data){
                                var age = calcularEdad(data);
                                    return (age<18?false:true);
                            }
                        }
                        }
                    }

                }
			}).on('success.validator.bv', function(e, data) {
                //console.log(data.result.message)

             /*   $('.formUserRegister').data('bootstrapValidator').updateMessage('cellphone', 'notEmpty', 'el celular no puede ser null')
*/
                /*example*/
               /* if (data.field === 'birthdate' && data.validator === 'date' && data.result.date) {
                    console.log('::enter to succes.validator')
                    console.log(data.validator)
                    // The eventDate field passes the date validator
                    // We can get the current date as a Javascript Date object
                    var currentDate = data.result.date,
                        day         = currentDate.getDay();

                    // If the selected date is Sunday
                    if (day === 0) {
                        // Treat the field as invalid
                        data.fv
                            .updateStatus(data.field, data.fv.STATUS_INVALID, data.validator)
                            .updateMessage(data.field, data.validator, 'Please choose a day except Sunday');
                    } else {
                        // Reset the message
                        data.fv.updateMessage(data.field, data.validator, 'The date is not valid');
                    }
                }*/
            }).on('success.form.fv', function(e) {
        /* do submitting with ajax*/
            });
           $('.birthDate').on('dp.change dp.show', function (e) {
                    // Revalidate the date when user change it
                    $('.formUserRegister').bootstrapValidator('revalidateField',   $('.birthDate'));
                });
		}
		$(function () {
            var pageFunction= function (){
                loadFormPlugins(initFormUserRegister);

            };
            pageFunction();
        });
	</script>
@endsection
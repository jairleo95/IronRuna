
		function initFormUserRegister(){
            $('.birthDate').datetimepicker({
                locale: 'es',
                format: 'D/MM/YYYY'
            });
            listSelectAjaxWithJavaBeans($('.country'), 'allCountries', '', 'id', 'name', '2', '', function(){
                                
                            });
                            $('.country').change(function(){
                                listSelectAjaxWithJavaBeans($('.department'),'regionsByCountry','idCountry='+$(this).val(),'id','name','1','',function(){
                                });
                            });

                            $('.department').change(function(){
                                listSelectAjaxWithJavaBeans($('.district'),'cityByRegion',
                                    'idRegion='+$(this).val(),'id','name','1','',function(){
                                });
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
		
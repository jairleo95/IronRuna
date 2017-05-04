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
					<h1>Checkout</h1>
				</div>
			</div>
		</section>
		<!-- Heading End -->
		<div class="container content">
			<div class="row">

			
			 
				 <div class="panel panel-success">
  <!-- Default panel contents -->
  <div class="panel-heading">Tickets</div>
  <div class="panel-body">
 <!-- Table -->
 <table class="table table-bordered table-hover">
							<thead class="thead-inverse">
								<tr>
									<th>Elemento</th>
									<th>Nombre</th>
									<th>Precio Unitario</th>
									<th>Cantidad</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody class="tableTicketDetails"></tbody>
						</table>
						<div class="cart-foot row">
								<div class="col-sm-6">
								 
 									<img src="images/payment-card-icon.png">
								</div>
								<div class="col-sm-3">
								<strong class="pull-right">Total del pedido</strong>
								 								
								</div>
								<div class="col-sm-3">
									<strong class="pull-right">S/.<span class="totalCost">0.0</span></strong>
								</div>
							</div>
  </div>

 

						
</div>
						 
						
						

			 
				 
			</div>
			<br>
			 
			<div class="row">
					<div class="aditionalData" style="display: none;" >
						<div class="col-md-6">
							
					<div class="panel panel-success">
					<div class="panel-heading">
						<i class="fa fa-user"></i> <span> Usuarios</span>
					</div>
			<div class="panel-body">
		<form class="form-horizontal formUserRegister" role="form" method="POST" action="{{route('register')}}">
						<input type="hidden" name="_token" value="{{csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Disciplina </label>
							<div class="col-md-6">
								<select name="discipline" class="form-control input-sm discipline">
									<option value="Natación">Natación</option>
									<option value="Ciclismo">Ciclismo</option>
									<option value="Maraton">Maraton</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.fullName')  </label>
							<div class="col-md-6">
								<input type="text" class="form-control input-sm fullName" name="fullName" value="{{ old('fullName') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">@lang('register.attributes.lastName')</label>
							<div class="col-md-6">
								<input type="text" class="form-control input-sm lastName" name="lastName" value="{{ old('lastName') }}">
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
						<footer>
								<button type="button" class="btn btn-success pull-right btnAddUser">
								Agregar <i class="fa fa-plus"></i>
								</button>
						</footer>
						<br>
					</form>
</div>
						
					</div>
				
								</div>
								<div class="col-md-6">
								 
									<div class="panel panel-success">
										<div class="panel-heading">Usuarios Agregados</div>
										<div class="panel-body">
											<table class="table table-hover">
										<thead>
											<tr>
												<th>Nº</th>
												<th>Nombres y Apellidos</th>
												<th>Disciplina</th>
											</tr>
										</thead>
										<tbody class="text-center tbodyUserAdded">
											<tr><td colspan="3">Nothing to show</td></tr>
										</tbody>
									</table>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<button class="btn btn-success pull-right payButton" type="submit">
										<i class="fa fa-send"></i>
										<span>Pagar Ahora</span>
									</button>
						</div>
		</div>
		
			<input type="hidden" class="eventSelected" value="{{ session('eventSelected')}}" >
		@endsection
		@section('scripts')
    		<script>
                var totalCost=0.0;
                var totalToPay=0.0;
                var objTotalCost=$('.totalCost');
                var num =1;
					$('.btnAddUser').click(function(){
						if (num==1) {$('.tbodyUserAdded').empty();}
						var op=$('.discipline').val();
						var  fullname =$('.fullName').val()+ ' '+$('.lastName').val();
						$('.tbodyUserAdded').append('<tr><td>'+num+'</td><td>'+fullname+'</td><td>'+op+'</td></tr>');
						num++;
						 
						$(".discipline option[value='"+op+"']").remove();
						$(".formUserRegister")[0].reset();
					});

				function calcTotalCostByEvent(itemQuantity,itemPrice){
					return itemQuantity*itemPrice;
				}
			function initTickesEventElements(objItemQuantity,objOptionRadios){

				for (var i = 0; i < objItemQuantity.length; i++) {

					$(".optionsRadios"+i).click(function(){
						console.log('click');
						var costtype= $(this).parents('tr').find($('.itemQuantity')).data('costtype');
						objTotalCost.empty();
						totalToPay= $(this).parents('tr').find($('.totalITem')).text();
						objTotalCost.append(totalToPay);
						totalToPay="0.0";
						console.log('costtype:'+costtype);
						if (costtype===2) {
							console.log('truee')
							$('.aditionalData').show(200);}else{$('.aditionalData').hide(200);}
						});

					var max =$( ".itemQuantity"+i ).data('valuemax');
					  $( ".itemQuantity"+i ).spinner({
		                min:0,  
		                max: max,            
		                down: "ui-icon-triangle-1-s",
		                up: "ui-icon-triangle-1-n",
		                change: function( event, ui ) {
		                    var itemQuantity=$(this).spinner( "value" );
		                    var itemPrice=$(this).parents('tr').find($('.itemPrice')).val();
		                    totalCost =calcTotalCostByEvent(itemQuantity,itemPrice);
		                   $(this).parents('tr').find($('.totalITem')).text(totalCost);
						}
		            });
				}	

		}

        function getCostByIdData(event,callback){
			$.ajax({
						url:'getCostByEvent',
						type:'GET',
						data:{
							'id':event
						},
						success:function(data){
								callback(data);
						}
			});
		}
		function buildTicket(tableTicketDetails,eventSelected){
            tableTicketDetails.empty();
            getCostByIdData(eventSelected,function(data){
                var hs = '';
                if (data.status){
                    var list = data.list;
                    var objItemQuantity=new Array();
                    var objOptionRadios=new Array();
                    for (  var i =0; i<list.length;i++){
			 
                        hs += '<tr class="text-center">';
                        hs += '  <td>';
                        hs += '<div class="form-check">';
                        hs += '  <label class="form-check-label">';
                        hs += ' <input type="radio" class="form-check-input optionsRadios'+i+'" name="optionsRadios"  value="1">';
                        hs += '  </label>';
                        hs += '  </div>';
                        hs += ' </td>';
                        hs += '  <td>';
                        hs += ' Venta ';
                        hs += '  <span>'+(list[i].name)+'</span>';
                        hs += '  </td>';
                        hs += '  </td>';
                        hs += ' <td><span>S/.</span>'+(list[i].value)+'</td>';
                        hs += ' <td><input type="text" class="form-control input-sm itemQuantity itemQuantity'+i+'" name="quantity" value="1" data-valuemax="'+list[i].maxQuantity+'" data-costtype="'+list[i].costType+'" /></td>';
                        hs += '   <td data-title="Total">S/. <span class="totalITem">0.0</span><input type="hidden" class="itemPrice" value="'+(list[i].value)+'" type="text" /></td>';
                        hs += '  </tr>';
				
					  tableTicketDetails.append(hs);
					  objItemQuantity[i]= $('.itemQuantity'+i);
					  objOptionRadios[i]=$('.optionsRadios'+i)
					  initTickesEventElements(objItemQuantity,objOptionRadios);
					  	hs='';
                    }
				} else{
                    console('something was wrong');
				}
			});
		}
        var tableTicketDetails=$('.tableTicketDetails');
        var event =$('.eventSelected').val();

        var btnPay=$('.payButton');
        buildTicket(tableTicketDetails,event);
    </script>
    @endsection
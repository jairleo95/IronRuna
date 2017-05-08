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

		</div> </div>
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
	<input type="hidden" class="token" name="_token" value="{{csrf_token() }}">

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title text-danger">Terminos y Condiciones</h4>
				</div>
				<div class="modal-body text-justify">

					<p>Declaro bajo juramento que no padezco afecciones físicas adquiridas o congénitas, ni lesiones que pudieran ocasionar trastornos en mi salud o condiciones de vida, como consecuencia de participar en la presente competencia. Asimismo declaro bajo juramento que antes de realizar la competencia me he realizado un chequeo médico y me encuentro en condiciones físicas óptimas para participar en la misma, asimismo asumo todos los riesgos asociados con la participación en la presente competencia.  Tomo conocimiento y acepto voluntariamente, que IRONRUNA y los Sponsors NO toman a su cargo ni se responsabilizan por ningún tipo de indemnización, reclamo, costo, daño y/o perjuicio reclamado, en lo concerniente  a, daños por accidentes, daños materiales, físicos o psíquicos o morales, causados hacia mi persona, con motivo y en ocasión de la competencia en la que participaré. Habiendo  leído  esta declaración  y  conociendo  estos hechos, libero  a IRONRUNA de todo  y  cualquier reclamo  o  responsabilidad  de cualquier tipo  que surja de mi participación  en  este evento  aunque esta responsabilidad pueda surgir por negligencia o culposidad de parte de las personas nombradas en esta declaración, así como de cualquier extravío, robo y/o hurto que pudiera sufrir. Como  así también  manifiesto  que no serán  responsables por incendios, cortocircuitos, robos, hurtos, caso  fortuito, cualquiera fuera la causa que lo  origine, daño  en  mi salud  provenientes de riñas o  peleas de terceros, daño  en  mi salud proveniente de afecciones físicas o no, que puedan acontecer con anterioridad, durante el transcurso o con posterioridad a la finalización de la competencia. Autorizo a los organizadores de la competencia y sponsor a utilizar, reproducir, distribuir y/o publicar fotografías, películas, videos, grabaciones y/o cualquier otro medio de registración de mi persona tomadas con motivo y en ocasión de la presente competencia, sin compensación económica alguna a  favor del participante de la presente competencia. 
					</p>
					<p>Por la presente, declaro tener __________ años de edad, y haber leído este documento y entendido su contenido.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default btnAccept" data-dismiss="modal">Aceptar</button>
				</div>
			</div>

		</div>
	</div>
	@endsection
	@section('scripts')
	<script>
		/*variables*/
		var totalCost=0.0;
		var unitCost=0.0;
		var objTotalCost=$('.totalCost');
		var num =1;
		var idCostSelected='';
		$('.btnAddUser').click(function(){
			if (num==1) {$('.tbodyUserAdded').empty();}
			var op=$('.discipline').val();
			var  fullname =$('.fullName').val()+ ' '+$('.lastName').val();
			$('.tbodyUserAdded').append('<tr class="trUserAdded"><td>'+num+'</td><td>'+fullname+'</td><td>'+op+'</td></tr>');
			num++;

			$(".discipline option[value='"+op+"']").remove();
			$(".formUserRegister")[0].reset();
		});

		function calcTotalCostByEvent(itemQuantity,itemPrice){
			return itemQuantity*itemPrice;
		}

		function setItemValue (objOptionRadios){
				objTotalCost.empty();


					var costtype= objOptionRadios.parents('tr').find($('.itemQuantity')).data('costtype');
					unitCost= objOptionRadios.parents('tr').find($('.totalITem')).text();
				 
						objTotalCost.append(unitCost);
					 
						idCostSelected=objOptionRadios.parents('tr').find($('.idCost')).val();
			 
					if (costtype===2) {
						$('.aditionalData').show(200);}else{$('.aditionalData').hide(200);
					}
		}
		function setTicketValues(objSpinner){
			var itemQuantity=objSpinner.spinner( "value" );
			var itemPrice=objSpinner.parents('tr').find($('.itemPrice')).val();
			totalCost =calcTotalCostByEvent(itemQuantity,itemPrice);
			objSpinner.parents('tr').find($('.totalITem')).text(totalCost);
		}

		function initTickesEventElements(objItemQuantity,objOptionRadios){
			for (var i = 0; i < objItemQuantity.length; i++) {
				var max =$( ".itemQuantity"+i ).data('valuemax');

					//setTicketValues($( ".itemQuantity"+i )); 
					setItemValue($(".optionsRadios"+i));

				$(".optionsRadios"+i).click(function(){
					var objOptionRadios =$(this);
					setItemValue(objOptionRadios);
					});

				$( ".itemQuantity"+i ).spinner({
					min:0,  
					max: max,            
					down: "ui-icon-plus",
					up: "ui-icon-minus",
					change: function( event, ui ) {
						setTicketValues($(this)); 
					},spin: function( event, ui ) {
						setTicketValues($(this)); 
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
						hs += ' <input type="radio" class="form-check-input optionsRadios optionsRadios'+i+'" name="optionsRadios"  value="1">';
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
						hs += '   <td data-title="Total">S/. <span class="totalITem">0.0</span><input type="hidden" class="itemPrice" value="'+(list[i].value)+'" type="text" />';

						hs +='<input type="hidden" class="idCost" value="'+list[i].idCost+'" />';
						hs +='</td>';
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
		btnPay.click(function(){

			var opcRadio=$('.optionsRadios:checked').val();
			var costtype= $('.optionsRadios:checked').parents('tr').find($('.itemQuantity')).data('costtype');
			console.log(opcRadio); 
			var s = $(".tbodyUserAdded .trUserAdded").length;

			console.log("costtype:"+costtype); 
			if (costtype===2&s===0 ) {
				/*usuario adicionales obligatorios*/

          		//alert("obligatorios!::"+s)
          	}else{
          		$('#myModal').modal({keyboard: false, backdrop: 'static'});
          		$('#myModal').modal('show');
          		
          	}
          });

		$(".btnAccept").click(function(){
					//window.location="payTicket";
					var data={
						'totalCost':totalCost,
						'idCost':idCostSelected,
						'_token':$('.token').val(),
						'unitCost':unitCost
					};
					$.ajax({
						url:'payTicket',type:'POST',data:data,
						success:function(data){
								if (data.submitStatus) {
									window.location="payTicketSuccess";
								}
						}
					});
				});

		buildTicket(tableTicketDetails,event);
	</script>
	@endsection
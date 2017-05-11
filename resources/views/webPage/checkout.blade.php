@extends('webPage.main')

@section('styles')

<link href="css/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.css" media="screen" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />


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
		<div class="panel panel-default">
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
				<div class="col-md-6 userdataSearch">
					<div class="well well-light">
						<div class="input-group" style="width: 100%;">
							<input type="text" class="form-control documentNumberSearch" placeholder="Search for document number" style="width: 100%;">
							<span class="input-group-btn inputDocumentSearch" >
								
							</span>
						</div><!-- /input-group -->
						<br>

						<section > 
							<div class="row"><div class="col-md-6"><span class="userDataItem"></span></div>
							<div class="col-md-6"><div class="disciplineItem"></div></div></div>
							<div class="searchMessage row"></div>
						</section>


						<div class="userDataRegister" style="display: none;">
						<form  class="form-horizontal formUserRegister" role="form" method="POST" action="{{route('register')}}">
							<ul class="nav nav-pills">
								<li class="active"><a href="#basic-tab" data-toggle="tab">Paso 1</a></li>
								<li><a href="#database-tab" data-toggle="tab">Paso 2</a></li>
								<li><a href="#step-3" data-toggle="tab">Paso 3</a></li>
							</ul>
							
							<div class="tab-content">
								<!-- First tab -->
								<div class="tab-pane active" id="basic-tab">
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
								<label class="col-md-4 control-label">Disciplina </label>
								<div class="col-md-6">
									<select name="discipline" class="form-control input-sm discipline" multiple="multiple">
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

								</div>

								<!-- Second tab -->
								<div class="tab-pane" id="database-tab">

								<div class="form-group">
								<label class="col-md-4 control-label">@lang('register.attributes.address')</label>
								<div class="col-md-6">
									<input type="text" class="form-control input-sm" name="address">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">@lang('register.attributes.country')</label>
								<div class="col-md-6 selectContainer" >
									<select name="country" class="form-control input-sm country">
										<option value="1">Perú</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">@lang('register.attributes.department')</label>
								<div class="col-md-6 selectContainer" >
									<select name="department" class="form-control input-sm department">
										<option value="1">Seleccione</option>
									</select>
								</div>
							</div>
							<div class="form-group" style="display: none">
								<label class="col-md-4 control-label">@lang('register.attributes.province')</label>
								<div class="col-md-6">

									<select name="province" class="form-control input-sm province">
										<option value="1">Seleccione</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">@lang('register.attributes.district')</label>
								<div class="col-md-6">
									<select name="district" class="form-control input-sm district">
										<option value="1">Seleccione</option>
									</select>
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
							
								
								</div>
								<div class="tab-pane active"  id="step-3">
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
								<button type="button" class="btn btn-success pull-right btnAddUser">
									Agregar <i class="fa fa-plus"></i>
								</button>
								</div>

								<!-- Previous/Next buttons -->
								<ul class="pager wizard">
									<li class="previous"><a href="javascript: void(0);">Previous</a></li>
									<li class="next"><a href="javascript: void(0);">Next</a></li>
								</ul>
							</div>
						</form>

						<div class="modal fade" id="completeModal" tabindex="-1" role="dialog">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Complete</h4>
									</div>

									<div class="modal-body">
										<p class="text-center">The installation is completed</p>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-success" data-dismiss="modal">Visit the website</button>
									</div>
								</div>
							</div>
						</div>

						 
					</div>
				</div>

			</div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row"><div class="col-md-6 text-right"><i class="fa fa-users"></i> Team  </div>
						<div class="col-md-6"><input type="text" name="team" class="form-control teamEvent input-sm"></div> </div>
						
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th class="text-center">Nº</th>
									<th class="text-center">Nombres y Apellidos</th>
									<th class="text-center">Disciplina</th>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src='js/businessLogic/userRegister.js'></script>
<script>

	/*variables*/
	var totalCost=0.0;
	var unitCost=0.0;
	var objTotalCost=$('.totalCost');
	var num =1;
	var idCostSelected='';
	var costtypeSelected=0;
	var payTicket=[];
	var currentUserItem={};

	var opcDisciplineAvalible=['Natación','Ciclismo','Maraton'];

	function manageUserByTicket(documentNumber){
		console.log('enter to function manageUserByTicket')
		var data ={
			'documentNumber':documentNumber
		}
		$('.searchMessage').empty();
		$('.inputDocumentSearch').empty();
		$('.inputDocumentSearch').append('<button class="btn btn-default" type="button"><i class="fa fa-spinner fa-spin"></i></button>');
		$.ajax({
			url:'findUserDataByDocummentNumber',data:data,type:'GET',success:function(data){
				if (data.searchStatus) {
					$('.userDataItem').empty();
					var fullName =data.data.userData.fullName;
					var lastName =data.data.userData.lastName;
					var user =data.data.userData.fullName +' '+data.data.userData.lastName;
					currentUserItem ={fullName,lastName};
					console.log(currentUserItem);
					$('.userDataRegister').hide();
					$('.inputDocumentSearch').empty();
					$('.inputDocumentSearch').append('<button class="btn btn-default btnAddUserItem" type="button"><i class="fa fa-plus"></i></button>');
					if (data.data.userData.isEnabled) {
						$('.userDataItem').empty();
						$('.userDataItem').append('<i class="fa fa-user"></i> '+user+' <span class="label label-primary">Disponible</span>');
						$('.disciplineItem').empty();	
						var opc ='';
						for (var i = 0; i <opcDisciplineAvalible.length; i++) {
							opc +='<option value="'+i+'">'+opcDisciplineAvalible[i]+'</option>';
						}
						console.log(opc);
						$('.disciplineItem').append('<select name="discipline" class="form-control discipline" multiple="multiple" style="width: 100%;">'+opc+'	</select>');

						$('.discipline').select2({
							maximumSelectionLength: 2,
							placeholder: "Disciplina"
						});

						$('.btnAddUserItem').click(function(){
							var arr = []; 
							var c=0;
							$('.discipline :selected').each(function(i, selected){ 
								arr[i] = $(selected).text(); 
								console.log('value:'+$(selected).val());
								opcDisciplineAvalible.splice($(selected).val()-c,1);
								c++;
							});
							console.log('new opc',opcDisciplineAvalible);

							addUserItemTable(currentUserItem.fullName,currentUserItem.lastName);
							$(".discipline").select2('destroy'); 
							$('.discipline').remove();
							$('.documentNumberSearch').val("");
							$('.userDataItem').empty();
							$('.disciplineItem').empty();

						});
					}else{
						$('.userDataItem').append('<i class="fa fa-user"></i> '+user+'  <span class="badge">No disponible </span>');
					}
				}else{
					/*no se encontro unusuario, opcion para agregar*/

							//$('.userDataRegister').show();
							$('.userDataItem').empty();
							$('.inputDocumentSearch').empty();

							var btnAddNewUser='<button class="newUser pull-right btn btn-primary"><i class="fa fa-user-plus"></i></button>'
							$('.inputDocumentSearch').html(btnAddNewUser);
							$('.newUser').click(function(){
								$('.userDataRegister').show(200);
								$('.searchMessage').empty();
								loadFormPlugins(initFormUserRegister);
								$('.btnAddUser').click(function(){
									console.log('adasd');
									console.log('validating..'+$('.formUserRegister').data('bootstrapValidator').validate());
							//if ($('.formUserRegister').validate()) {
								var  fullName =$('.fullName').val() ;
								var  lastName = $('.lastName').val();
								addUserItemTable(fullName,lastName);
								//	}

							});

							});
							$('.searchMessage').html('<div class="col-md-12"><div class="alert alert-warning"> No se encontró ningun usuario. </div></div>');
							/*if exists discipline select*/
							$(".discipline").select2('destroy'); 
							$('.discipline').remove();
						}
					}
				});
	}

	function addUserItemTable(fullName,lastName){
		if (num==1) {$('.tbodyUserAdded').empty();}
		var op=$('.discipline :selected').text();

		$('.tbodyUserAdded').append('<tr class="trUserAdded"><td>'+num+'</td><td>'+fullName+' '+lastName+'</td><td>'+op+'</td></tr>');
		num++;

		$(".discipline option[value='"+op+"']").remove();
		$(".formUserRegister")[0].reset();
	}


	function calcTotalCostByEvent(itemQuantity,itemPrice){
		return itemQuantity*itemPrice;
	}
	function calculateTotalCost(objOptionRadios){
		/*Calcular costo total*/
		objTotalCost.empty();
		unitCost= objOptionRadios.parents('tr').find($('.totalITem')).text();
		objTotalCost.append(unitCost);
	}

	function setItemValue (objOptionRadios){
		costtypeSelected= objOptionRadios.parents('tr').find($('.itemQuantity')).data('costtype');
		calculateTotalCost(objOptionRadios);
		idCostSelected=objOptionRadios.parents('tr').find($('.idCost')).val();
		/*dinamical view by CostType*/aditionalDataViewByCostType(costtypeSelected);
	}
	function aditionalDataViewByCostType(costtype){
		if (costtype===2) {
			$('.aditionalData').show(200);}else{$('.aditionalData').hide(200);
		}
	}
	function setTicketValues(objSpinner){
		var itemQuantity=objSpinner.spinner( "value" );
		var itemPrice=objSpinner.parents('tr').find($('.itemPrice')).val();
		totalCost =calcTotalCostByEvent(itemQuantity,itemPrice);
		objSpinner.parents('tr').find($('.totalITem')).text(totalCost);
		calculateTotalCost(objSpinner);
	}

	function initUserDataForm(){
		console.log(' enter to function initUserDataForm');
		var btnSearcStatus='search';


		$('.documentNumberSearch').change(function (){
			console.log("entero to change")
			var documentNumber =$(this).val();
			manageUserByTicket(documentNumber)
			
		});
		$('.optionsRadios').click(function(){
			var objOptionRadios =$('.optionsRadios');
			var costtype= objOptionRadios.parents('tr').find($('.itemQuantity')).data('costtype');
				//aditionalDataViewByCostType(costtype);
			});
		$('.inputDocumentSearch').append('<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>');
		$('.btnAddUserItem').click(function(){

			var documentNumber =$('.inputDocumentSearch').val();
			manageUserByTicket(documentNumber)
		});

	}

	function initTickesEventElements(objItemQuantity,objOptionRadios){
		for (var i = 0; i < objItemQuantity.length; i++) {
			var max =$( ".itemQuantity"+i ).data('valuemax');
			$(".optionsRadios"+i).click(function(){
				var objOptionRadios =$(this);
				setItemValue(objOptionRadios);
				var item =$(this).val();
				setTicketValues($( ".itemQuantity"+item )); 
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
			if (i === 0) {
				setItemValue($(".optionsRadios"+i));
				setTicketValues($( ".itemQuantity"+i )); 

			}
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
					if (i===0) {

						hs += ' <input type="radio" class="form-check-input optionsRadios optionsRadios'+i+'" name="optionsRadios"  checked="checked" value="'+i+'">';
					}else{
						hs += ' <input type="radio" class="form-check-input optionsRadios optionsRadios'+i+'" name="optionsRadios"  value="'+i+'">';
					}

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
				initUserDataForm();

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
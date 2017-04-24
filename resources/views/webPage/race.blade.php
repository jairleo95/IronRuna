@extends('webPage.main')
@section('content')
	<!-- Header End -->
	<!-- Heading Start -->
	<section class="page-heading haslayout">
		<div class="container">
			<div class="row">
				<h1>Carreras</h1>
			</div>
		</div>
	</section>
	<!-- Heading End -->
	<!-- Events Start -->
	<section class="events haslayout">
		<div class="container">
			<div class="row">
				<div class="head-section">
					<div class="border-title"><h2>Eventos</h2></div>
					<!--<span class="title">Próximos Eventos...</span>-->
				</div>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default event disabled">
						<div class="panel-heading" role="tab" id="headingOne">
							<a class="accordion-head" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<div>
										<span class="date">
											<i class="fa fa-calendar-o"></i>
											<em>21/08/2017</em>
										</span>
									<span class="flag"><img src="images/race/flag-icon-01.png" alt="image description"></span>
								</div>
								<div>
									<h3>Perú 2017 Lima - Costa Verde Half Triathlon</h3>
									<ul>
										<li>Ixtapa, Mexico</li>
										<li>Continental Cup</li>
										<li>Triathlon</li>
										<li>Standard</li>
									</ul>
								</div>
								<div class="unavailable">
									<span class="notice">Unavailable</span>
								</div>
							</a>
							<a href="#" class="btn-theme red btn-book-now">
								<span class="txt">Inscribirse</span>
								<span class="round">
										<i class="fa fa-arrow-right"></i>
									</span>
							</a>
						</div>
						<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<table class="table theme-table">
									<thead>
									<tr>
										<th><strong>Contact Information</strong></th>
										<th><strong>Event Information</strong></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><strong>Event Location:</strong> Versailles, France</td>
										<td><strong>Entry Fee:</strong> $99</td>
									</tr>
									<tr>
										<td><strong>Email:</strong> Lotye Léveillé</td>
										<td><strong>Money Prize:</strong> $5000</td>
									</tr>
									<tr>
										<td><strong>Phone:</strong> 563-232-4318</td>
										<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
									</tr>
									<tr>
										<td><strong>Start date:</strong> 24/06/15</td>
										<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
									</tr>
									<tr>
										<td><strong>End date:</strong> 28/06/15</td>
										<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
									</tr>
									<tr>
										<td><strong>Last day to book by:</strong> 22/06/15</td>
										<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<!-- begin loop for event properties-->
					<div class="eventListDetails">

					</div>
					<div class="panel panel-default event">
						<div class="panel-heading" role="tab" id="">
							<a class="accordion-head collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<div>
									<br>
									<span class="date">
											<i class="fa fa-calendar-o"></i>
											<em>06/08/2017</em>
										</span>
									<!--	<span class="flag"><img src="images/race/flag-icon-02.png" alt="image description"></span>-->
								</div>
								<div>
									<h3>Perú 2017 Lima - Half Iron Runa</h3>
									<ul>
										<li>Costa Verde, Lima</li>
										<li>Half Triathlon</li>
										<!--<li>Triathlon</li>
                                        <li>Standard</li>-->
									</ul>
								</div>
							</a>
							<a href="checkout" class="btn-theme red btn-book-now">
								<span class="txt">Inscribirse</span>
								<span class="round">
										<i class="fa fa-arrow-right"></i>
									</span>
							</a>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								<table class="table theme-table">
									<thead>
									<tr>
										<th><strong>Información de Contácto</strong></th>
										<th><strong>Información del Evento</strong></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><strong>Locación del Evento:</strong> Costa Verde, Lima</td>
										<td><strong>Costo de Inscripción:</strong> S/. 180.00 Individual y S/. 250.00 Postas</td>
									</tr>
									<tr>
										<td><strong>Email:</strong> Lotye Léveillé</td>
										<td><strong>Cupos:</strong> LIMITADO A 400  PARTICIPANTES</td>
									</tr>
									<tr>
										<td><strong>Phone:</strong> 563-232-4318</td>
										<td><strong>Tipo:</strong> MEDIA DISTANCIA (1,9 NATACIÓN, 90 CICLISMO Y 21 CARRERA)</td>

									</tr>
									<tr>
										<td colspan="2"><strong>Categorías:</strong> INDIVIDUAL Y POSTAS</td>

									</tr>
									<tr>
										<td colspan="2"><strong>Descripción:</strong> Este próximo domingo 06 de agosto del 2017, se llevará a cabo la primera edición del “HALF IRONRUNA”, competencia que se desarrollará a lo largo y ancho de la Costa Verde, en Lima, Perú, lugar  tradicional por excelencia de los primeros triathlones desarrollados en nuestro país desde la década de los '80s.
											Los 1900 mt de natación se desarrollaran en las aguas de  Playa de Agua Dulce del Océano Pacífico, con condiciones de marea muy tranquilas.
											Los 90 km del sector de ciclismo se desarrollarán a lo largo de la Costa Verde, sobre un circuito plano y muy rápido en su mayor porcentaje.
											Los 21 km del sector de carrera,  serán completados frente al circuito de playas de la Costa Verde, ofreciendo vistas impresionantes y muy hermosas, para finalizar en el corazón de la ya tradicional Playa de Agua Dulce.
										</td>
									</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default event">
						<div class="panel-heading" role="tab" id="headingThree">
							<a class="accordion-head collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<div>
										<span class="date">
											<i class="fa fa-calendar-o"></i>
											<em>21/08/2017</em>
										</span>
									<span class="flag"><img src="images/race/flag-icon-03.png" alt="image description"></span>
								</div>
								<div>
									<h3>Perú 2017 Lima - Costa Verde Half Triathlon</h3>
									<ul>
										<li>Ixtapa, Mexico</li>
										<li>Continental Cup</li>
										<li>Triathlon</li>
										<li>Standard</li>
									</ul>
								</div>
							</a>
							<a href="#" class="btn-theme red btn-book-now">
								<span class="txt">Inscribirse</span>
								<span class="round">
										<i class="fa fa-arrow-right"></i>
									</span>
							</a>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
								<table class="table theme-table">
									<thead>
									<tr>
										<th><strong>Contact Information</strong></th>
										<th><strong>Event Information</strong></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><strong>Event Location:</strong> Versailles, France</td>
										<td><strong>Entry Fee:</strong> $99</td>
									</tr>
									<tr>
										<td><strong>Email:</strong> Lotye Léveillé</td>
										<td><strong>Money Prize:</strong> $5000</td>
									</tr>
									<tr>
										<td><strong>Phone:</strong> 563-232-4318</td>
										<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
									</tr>
									<tr>
										<td><strong>Start date:</strong> 24/06/15</td>
										<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
									</tr>
									<tr>
										<td><strong>End date:</strong> 28/06/15</td>
										<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
									</tr>
									<tr>
										<td><strong>Last day to book by:</strong> 22/06/15</td>
										<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default event">
						<div class="panel-heading" role="tab" id="headingFour">
							<a class="accordion-head collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								<div>
										<span class="date">
											<i class="fa fa-calendar-o"></i>
											<em>21/08/2017</em>
										</span>
									<span class="flag"><img src="images/race/flag-icon-03.png" alt="image description"></span>
								</div>
								<div>
									<h3>Mexico 2017 Ixtapa CAMTRI Triathlon American Cup</h3>
									<ul>
										<li>Ixtapa, Mexico</li>
										<li>Continental Cup</li>
										<li>Triathlon</li>
										<li>Standard</li>
									</ul>
								</div>
							</a>
							<a href="#" class="btn-theme red btn-book-now">
								<span class="txt">Inscribirse</span>
								<span class="round">
										<i class="fa fa-arrow-right"></i>
									</span>
							</a>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								<table class="table theme-table">
									<thead>
									<tr>
										<th><strong>Contact Information</strong></th>
										<th><strong>Event Information</strong></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><strong>Event Location:</strong> Versailles, France</td>
										<td><strong>Entry Fee:</strong> $99</td>
									</tr>
									<tr>
										<td><strong>Email:</strong> Lotye Léveillé</td>
										<td><strong>Money Prize:</strong> $5000</td>
									</tr>
									<tr>
										<td><strong>Phone:</strong> 563-232-4318</td>
										<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
									</tr>
									<tr>
										<td><strong>Start date:</strong> 24/06/15</td>
										<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
									</tr>
									<tr>
										<td><strong>End date:</strong> 28/06/15</td>
										<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
									</tr>
									<tr>
										<td><strong>Last day to book by:</strong> 22/06/15</td>
										<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default event">
						<div class="panel-heading" role="tab" id="headingFive">
							<a class="accordion-head collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								<div>
										<span class="date">
											<i class="fa fa-calendar-o"></i>
											<em>21/08/2017</em>
										</span>
									<span class="flag"><img src="images/race/flag-icon-03.png" alt="image description"></span>
								</div>
								<div>
									<h3>Mexico 2017 Ixtapa CAMTRI Triathlon American Cup</h3>
									<ul>
										<li>Ixtapa, Mexico</li>
										<li>Continental Cup</li>
										<li>Triathlon</li>
										<li>Standard</li>
									</ul>
								</div>
							</a>
							<a href="#" class="btn-theme red btn-book-now">
								<span class="txt">Inscribirse</span>
								<span class="round">
										<i class="fa fa-arrow-right"></i>
									</span>
							</a>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="panel-body">
								<table class="table theme-table">
									<thead>
									<tr>
										<th><strong>Contact Information</strong></th>
										<th><strong>Event Information</strong></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><strong>Event Location:</strong> Versailles, France</td>
										<td><strong>Entry Fee:</strong> $99</td>
									</tr>
									<tr>
										<td><strong>Email:</strong> Lotye Léveillé</td>
										<td><strong>Money Prize:</strong> $5000</td>
									</tr>
									<tr>
										<td><strong>Phone:</strong> 563-232-4318</td>
										<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
									</tr>
									<tr>
										<td><strong>Start date:</strong> 24/06/15</td>
										<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
									</tr>
									<tr>
										<td><strong>End date:</strong> 28/06/15</td>
										<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
									</tr>
									<tr>
										<td><strong>Last day to book by:</strong> 22/06/15</td>
										<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default event">
						<div class="panel-heading" role="tab" id="headingSix">
							<a class="accordion-head collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								<div>
										<span class="date">
											<i class="fa fa-calendar-o"></i>
											<em>21/08/2017</em>
										</span>
									<span class="flag"><img src="images/race/flag-icon-03.png" alt="image description"></span>
								</div>
								<div>
									<h3>Perú 2017 Lima - Costa Verde Half Triathlon</h3>
									<ul>
										<li>Ixtapa, Mexico</li>
										<li>Continental Cup</li>
										<li>Triathlon</li>
										<li>Standard</li>
									</ul>
								</div>
							</a>
							<a href="#" class="btn-theme red btn-book-now">
								<span class="txt">Inscribirse</span>
								<span class="round">
										<i class="fa fa-arrow-right"></i>
									</span>
							</a>
						</div>
						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
							<div class="panel-body">
								<table class="table theme-table">
									<thead>
									<tr>
										<th><strong>Contact Information</strong></th>
										<th><strong>Event Information</strong></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><strong>Event Location:</strong> Versailles, France</td>
										<td><strong>Entry Fee:</strong> $99</td>
									</tr>
									<tr>
										<td><strong>Email:</strong> Lotye Léveillé</td>
										<td><strong>Money Prize:</strong> $5000</td>
									</tr>
									<tr>
										<td><strong>Phone:</strong> 563-232-4318</td>
										<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
									</tr>
									<tr>
										<td><strong>Start date:</strong> 24/06/15</td>
										<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
									</tr>
									<tr>
										<td><strong>End date:</strong> 28/06/15</td>
										<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
									</tr>
									<tr>
										<td><strong>Last day to book by:</strong> 22/06/15</td>
										<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default event">
						<div class="panel-heading" role="tab" id="headingSeven">
							<a class="accordion-head collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								<div>
										<span class="date">
											<i class="fa fa-calendar-o"></i>
											<em>21/08/2017</em>
										</span>
									<span class="flag"><img src="images/race/flag-icon-03.png" alt="image description"></span>
								</div>
								<div>
									<h3>Mexico 2017 Ixtapa CAMTRI Triathlon American Cup</h3>
									<ul>
										<li>Ixtapa, Mexico</li>
										<li>Continental Cup</li>
										<li>Triathlon</li>
										<li>Standard</li>
									</ul>
								</div>
							</a>
							<a href="#" class="btn-theme red btn-book-now">
								<span class="txt">Inscribirse</span>
								<span class="round">
										<i class="fa fa-arrow-right"></i>
									</span>
							</a>
						</div>
						<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
							<div class="panel-body">
								<table class="table theme-table">
									<thead>
									<tr>
										<th><strong>Contact Information</strong></th>
										<th><strong>Event Information</strong></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><strong>Event Location:</strong> Versailles, France</td>
										<td><strong>Entry Fee:</strong> $99</td>
									</tr>
									<tr>
										<td><strong>Email:</strong> Lotye Léveillé</td>
										<td><strong>Money Prize:</strong> $5000</td>
									</tr>
									<tr>
										<td><strong>Phone:</strong> 563-232-4318</td>
										<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
									</tr>
									<tr>
										<td><strong>Start date:</strong> 24/06/15</td>
										<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
									</tr>
									<tr>
										<td><strong>End date:</strong> 28/06/15</td>
										<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
									</tr>
									<tr>
										<td><strong>Last day to book by:</strong> 22/06/15</td>
										<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default event">
						<div class="panel-heading" role="tab" id="headingEight">
							<a class="accordion-head collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
								<div>
										<span class="date">
											<i class="fa fa-calendar-o"></i>
											<em>21/08/2017</em>
										</span>
									<span class="flag"><img src="images/race/flag-icon-03.png" alt="image description"></span>
								</div>
								<div>
									<h3>Perú 2017 Lima - Costa Verde Half Triathlon</h3>
									<ul>
										<li>Ixtapa, Mexico</li>
										<li>Continental Cup</li>
										<li>Triathlon</li>
										<li>Standard</li>
									</ul>
								</div>
							</a>
							<a href="#" class="btn-theme red btn-book-now">
								<span class="txt">Inscribirse</span>
								<span class="round">
										<i class="fa fa-arrow-right"></i>
									</span>
							</a>
						</div>
						<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
							<div class="panel-body">
								<table class="table theme-table">
									<thead>
									<tr>
										<th><strong>Contact Information</strong></th>
										<th><strong>Event Information</strong></th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td><strong>Event Location:</strong> Versailles, France</td>
										<td><strong>Entry Fee:</strong> $99</td>
									</tr>
									<tr>
										<td><strong>Email:</strong> Lotye Léveillé</td>
										<td><strong>Money Prize:</strong> $5000</td>
									</tr>
									<tr>
										<td><strong>Phone:</strong> 563-232-4318</td>
										<td><strong>Description:</strong> CAMTRI Sprint Triathlon French Cup will feature a sprint distance for elite athletes.</td>
									</tr>
									<tr>

										<td><strong>Swim Course:</strong> 1 lap of 750 m</td>
									</tr>
									<tr>
										<td><strong>End date:</strong> 28/06/15</td>
										<td><strong>Bike Course:</strong> 3 laps of 7 km; hilly and technical</td>
									</tr>
									<tr>
										<td><strong>Last day to book by:</strong> 22/06/15</td>
										<td><strong>Run Course:</strong> 2 laps of 2,6 km; totally flat</td>
									</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- Pagination Start -->
				<nav class="pagination-area">
					<ul class="pagination">
						<li><a href="#" aria-label="Previous"><span class="icon-arrow-left" aria-hidden="true"></span></a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#" aria-label="Next"><span class="fa fa-arrow-right" aria-hidden="true"></span></a></li>
					</ul>
				</nav>
				<!-- Pagination End -->
			</div>
		</div>
	</section>
	<!-- Events End -->

@endsection
@section('scripts')
	<script type="text/javascript">
        var divEnvetListDetails =$('.eventListDetails');
        divEnvetListDetails.empty();
        function getAllPostedEvtens(){
            $.ajax({
                url:'getAllPostedEvtens',
                data:'',
                type:'get',
                success:function(data){
                    var list =data.data;

                    var htmlString='';
                    for (var i = 0; i < list.length; i++) {
                        var eventStatus=(list[i].eventStatus==="1")?'':'disabled';
                        htmlString +='<div class="panel panel-default event '+eventStatus+'"  style="margin-top:5px;margin-bottom:10px;">'
                            +'<div class="panel-heading" role="tab" id="headingTwos">'
                            +'<a class="accordion-head collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwos" aria-expanded="false" aria-controls="collapseTwos">'
                            +'<div>'
                            +	'<br>'
                            +	'<span class="date">'
                            +	'<i class="fa fa-calendar-o"></i>'
                            +	'<em>'+list[i].initDate+'</em>'
                            +'</span>'

                            +'</div>'
                            +'<div>'
                            +'<h3>'+list[i].tittle+'</h3>'
                            +'<ul>'
                            +'<li>'+list[i].shortTittle+'</li>'

                            +'</ul>'
                            +'</div>'
                            +'</a>'
                            +'<a href="checkout/'+list[i].idEvent+'" class="btn-theme red btn-book-now">'
                            +	'<span class="txt">Inscribirse</span>'
                            +	'<span class="round">'
                            +	'<i class="fa fa-arrow-right"></i>'
                            +	'</span>'
                            +'</a>'
                            +'</div>'
                            +'<div id="collapseTwos" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwos">'
                            +'<div class="panel-body">'
                            +'<table class="table theme-table">'
                            +'<thead>'
                            +'<tr>'
                            +'<th><strong>Información de Contácto</strong></th>'
                            +	'<th><strong>Información del Evento</strong></th>'
                            +	'</tr>'
                            +'</thead>'
                            +'<tbody>'
                            +	'<tr>'
                            +	'<td><strong>Locación del Evento:</strong>'+list[i].locale+'</td>';

								/*Iterate cost list*/
                        htmlString+='<td><strong>Costo de Inscripción:</strong>';
								for(var c =0;c<list[i].cost.length;c++){
                                    htmlString+='S/. ';
                                    htmlString	+=list[i].cost[c].value+' ';
                                    htmlString	+=list[i].cost[c].name;
                                    if((c+1)!==list[i].cost.length){
                                        htmlString	+= ' - ';
									}
								}
                        htmlString +='</td>';
                        htmlString +='</tr>'
                            +'<tr>'
                            +	'<td><strong>Email:</strong> '+list[i].emailContact+'</td>'
                            +	'<td><strong>Cupos:</strong> '+list[i].quota+'</td>'
                            +'</tr>'
                            +'<tr>'
                            +	'<td><strong>Phone:</strong> '+list[i].phoneContact+'</td>'
								/*get de eventype name*/
                            +	'<td><strong>Tipo:</strong> MEDIA DISTANCIA (1,9 NATACIÓN, 90 CICLISMO Y 21 CARRERA)</td>'

                            +'</tr>'
                            +'<tr>'
                            +	'<td colspan="2">'+list[i].aditionalData+'</td>'
                            +'</tr>'
                            +'<tr>'
                            +	'<td colspan="2"><strong>Descripción:</strong> '+list[i].description+' '
                            +'</td>'
                            +'</tr>'
                            +'</tbody>'
                            +'</table>'
                            +'</div>'
                            +'</div>'
                            +'</div>';
                    }
                    divEnvetListDetails.append(htmlString);
                }
            });
        }
        getAllPostedEvtens();
	</script>
@endsection
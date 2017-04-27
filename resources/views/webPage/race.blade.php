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

					<!-- begin loop for event properties-->
					<div class="eventListDetails">
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
                        htmlString+='<td><strong>Costo de Inscripción: </strong>';
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
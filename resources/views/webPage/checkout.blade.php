@extends('webPage.main')
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
				<form>
					<fieldset>
						<h2>Tickets</h2>
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
 						<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
								</div>
								<div class="col-sm-6 cart-total">
									<div class="order-total">
										<strong>Total del pedido</strong>
										<strong>S/.<span class="totalCost">0.0</span></strong>
									</div>
									<button class="btn btn-success pull-right payButton" type="submit">
										<i class="fa fa-send"></i>
										<span>Pagar Ahora</span>
									</button>
								</div>
							</div>

					</fieldset>
				</form>
			</div>
		</div>
			<input type="text" class="eventSelected" value="{{ session('eventSelected')}}" >
		@endsection
		@section('scripts')
    		<script>
                var totalCost=0.0;
                var objTotalCost=$('.totalCost');
				function calcTotalCostByEvent(itemQuantity,itemPrice){
					return itemQuantity*itemPrice;
				}
		function initTickesEventElements(){
            $( ".itemQuantity" ).spinner({
                min:0,
                max:3,
                down: "ui-icon-triangle-1-s",
                up: "ui-icon-triangle-1-n",
                change: function( event, ui ) {
                    var itemQuantity=$(this).spinner( "value" );
                  //  $(this).parents('tr').find($('.itemPrice')).css('background','red');
                    var itemPrice=$(this).parents('tr').find($('.itemPrice')).val();
                    console.log('itemPrice:'+itemPrice)
                    totalCost =calcTotalCostByEvent(itemQuantity,itemPrice);
                    objTotalCost.text(totalCost);
				}
            });
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
                    for (  var i =0; i<list.length;i++){
					console.log((list[i].value));
                        hs += '<tr>';
                        hs += '  <td>';
                        hs += '<div class="form-check">';
                        hs += '  <label class="form-check-label">';
                        hs += ' <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">';
                        hs += '  </label>';
                        hs += '  </div>';
                        hs += ' </td>';
                        hs += '  <td>';
                        hs += ' <i class="fa fa-user fa-2x"></i>';
                        hs += '  <span>'+(list[i].name)+'</span>';
                        hs += '  </td>';
                        hs += '  </td>';
                        hs += ' <td>'+(list[i].value)+'</td>';
                        hs += ' <td><input type="text" class="form-control itemQuantity" name="quantity" value="0"/></td>';
                        hs += '   <td data-title="Total">S/. <span class="totalITem">0.0</span><input class="itemPrice" value="'+(list[i].value)+'" type="text" /></td>';
                        hs += '  </tr>';

                    }
                    tableTicketDetails.append(hs);
					initTickesEventElements();
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
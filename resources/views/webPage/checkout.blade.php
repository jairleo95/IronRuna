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
							<tbody>
								<tr>
									<td>
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
											</label>
										</div>
									</td>
									<td>
										<i class="fa fa-user fa-2x"></i>
										<span>Venta Individuales</span>
									</td>
									</td>
									<td>$124.99</td>
									<td><input type="text" class="form-control spinner" name="quantity" value="1"/></td>
									<td data-title="Total">$124.99</td>
								</tr>
								<tr>
									<td>
										<div class="form-check">
											<label class="form-check-label">
												<input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
											</label>
										</div>
									</td>
									<td>
										<i class="fa fa-users fa-2x"></i>
										<span>Venta Equipos (Postas)</span>
									</td>
									<td data-title="Unit Price">$124.99</td>
									<td>
										<input type="text" name="quantity"   value="1" class="form-control spinner"/>
									</td>
									<td data-title="Total">$124.99</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-foot row">
								<div class="col-sm-6">
 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>

								</div>
								<div class="col-sm-6 cart-total">
									<div class="cart-subtotal">
										<span>Subtotal</span>
										<span>$369.97</span>
									</div>
									<div class="order-total">
										<strong>Total del pedido</strong>
										<strong>$369.97</strong>
									</div>
									<button class="btn btn-success pull-right" type="submit">
										<i class="fa fa-send"></i>
										<span>Pagar Ahora</span>
									</button>
								</div>
							</div>

					</fieldset>
				</form>
			</div>
		</div>
		@endsection
@section('scripts')
    <script>
        $( ".spinner" ).spinner({
			min:0,
			max:3,
			down: "ui-icon-triangle-1-s",
			up: "ui-icon-triangle-1-n"
        });
    </script>
    @endsection
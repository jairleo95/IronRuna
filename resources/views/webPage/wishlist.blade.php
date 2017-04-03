@extends('webPage.main')
@section('content')
		<!-- Heading Start -->
		<section class="page-heading haslayout">
			<div class="container">
				<div class="row">
					<h1>My Wishlist</h1>
				</div>
			</div>
		</section>
		<!-- Heading End -->
		<div class="container content">
			<div class="row">
				<form>
					<fieldset>
						<table class="table cart-table">
							<thead>
								<tr>
									<th>Product Name</th>
									<th>Unit Price</th>
									<th>Stock Status</th>
									<th>&nbsp;</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td data-title="Product Name">
										<img src="images/shop/img6.jpg" width="116" height="116" alt="image description">
										<em>Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</em>
									</td>
									<td data-title="Unit Price">$124.99</td>
									<td data-title="Stock Status">In Stock</td>
									<td data-title="Remove Item"><i class="btn-delete-item"><a href="#" class="fa fa-remove"></a></i></td>
								</tr>
								<tr>
									<td data-title="Product Name">
										<img src="images/shop/img7.jpg" width="116" height="116" alt="image description">
										<em>Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</em>
									</td>
									<td data-title="Unit Price">$124.99</td>
									<td data-title="Stock Status">In Stock</td>
									<td data-title="Remove Item"><i class="btn-delete-item"><a href="#" class="fa fa-remove"></a></i></td>
								</tr>
								<tr>
									<td data-title="Product Name">
										<img src="images/shop/img8.jpg" width="116" height="116" alt="image description">
										<em>Pearl Izumi Men's E:Motion Tri N1 Neutral Race Shoe</em>
									</td>
									<td data-title="Unit Price">$124.99</td>
									<td data-title="Stock Status">In Stock</td>
									<td data-title="Remove Item"><i class="btn-delete-item"><a href="#" class="fa fa-remove"></a></i></td>
								</tr>
							</tbody>
						</table>
					</fieldset>
				</form>
			</div>
		</div>
		<!-- Competitors Start -->
		<div class="competitor-section haslayout">
			<div class="container">
				<div class="row">
					<div class="competitor">
						<div class="col-sm-5 col-xs-12 pull-right">
							<div class="border-title">
								<h2>Learn more about dwarfing your <strong>competitors.</strong></h2>
							</div> <form class="competitor-form" name="contactform" method="post" action="http://786themes.net/html/triathlon/triathlon/php/contact.php">
                                    <fieldset>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="email" data-error="Email address is invalid" required>
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="How Can We Help?" name="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn-theme red btn-submit" type="submit">
                                                <span class="txt">Contact Us</span>
                                                <span class="round">
                                                    <i class="icon-arrow-right-latest-races"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </fieldset>
                                </form>
						</div>
						<div class="col-sm-7 col-xs-12 pull-left competitor-img">
							<img src="images/img12.png" alt="image description">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Competitors End -->
		@endsection
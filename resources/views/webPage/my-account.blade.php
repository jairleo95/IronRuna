@extends('webPage.main')
@section('content')
		<!-- Heading Start -->
		<section class="page-heading haslayout">
			<div class="container">
				<div class="row">
					<h1>My Account</h1>
				</div>
			</div>
		</section>
		<!-- Heading End -->
		<div class="container my-account">
			<div class="row">
				<ul>
					<li>
						<strong class="title">Hello User (Not User123? <a href="#">Sign Out</a>)</strong>
						<p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.</p>
					</li>
					<li>
						<strong class="title">My Addresses</strong>
						<p>The following addresses will be used on the checkout page by default.</p>
					</li>
					<li>
						<strong class="title">Billing Addresses</strong>
						<p>You have not set up this type of address yet.</p>
						<a href="#" class="btn-theme btn-edit">
							<span class="txt">Edit</span>
							<span class="round">
								<i class="icon-arrow-right-latest-races"></i>
							</span>
						</a>
					</li>
					<li>
						<strong class="title">Shipping Addresses</strong>
						<p>You have not set up this type of address yet.</p>
						<a href="#" class="btn-theme btn-edit">
							<span class="txt">Edit</span>
							<span class="round">
								<i class="icon-arrow-right-latest-races"></i>
							</span>
						</a>
					</li>
				</ul>
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
                                </div>
                                <form class="competitor-form" name="contactform" method="post" action="http://786themes.net/html/triathlon/triathlon/php/contact.php">
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
                                <img src="images/img11.png" alt="image description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<!-- Competitors End -->
		 @endsection
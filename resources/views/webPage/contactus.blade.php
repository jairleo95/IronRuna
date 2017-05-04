@extends('webPage.main')

@section('content')

		<!-- Heading Start -->

		<section class="page-heading haslayout">

			<div class="container">

				<div class="row">

					<h1>Contáctenos</h1>

				</div>

			</div>

		</section>

		<!-- Heading End -->

		<div class="container content">

			<div id="contactus-sec" class="fullwidth">

				<div class="row">

					<div class="col-sm-10 col-sm-offset-1">

						<div class="fullwidth contact-textbox text-center">

							<header class="po-headingborder">

								<h2>PÓNGASE EN CONTACTO CON NOSOTROS</h2>

							</header>

					 	<p>Por favor, dejanos tus consultas, en breve nos ponemos en contacto contigo. </p>



						</div>

					</div>

					<!-- Contact info -->

					<div class="po-contactinfo-sec fullwidth">

						<div class="col-xs-3 text-center">

							<article>

								<figure class="po-color">

									<i class="fa fa-map-marker float"></i>

								</figure>

								<p>Manzana F Lote 8, Urbanición Jardinez de San Vicente</p>

								<p>San Juan de Lurigancho, Lima</p>

							</article>

						</div>

						<div class="col-xs-3 text-center">

							<article>

								<figure class="po-color">

									<i class="fa fa-mobile float"></i>

								</figure>
 

								<p>+51 997 238 140</p>
								<p>+51 924 380 559</p>

							</article>

						</div>

						<div class="col-xs-3 text-center">

							<article>

								<figure class="po-color">

									<i class="fa fa-phone float"></i>

								</figure>

								<p><time datetime=" ">Lun - Vier 08:00 – 21:00</time> </p>
								<p>01 458 28 85</p>
							</article>

						</div>

						<div class="col-xs-3 text-center">

							<article>

								<figure class="po-color">

									<i class="fa fa-envelope float"></i>

								</figure>

								<p>No dude en enviarnos un correo electrónico</p>

								<p><a style="color:black" href="mailto:informes@ironruna.com">informes@ironruna.com</a></p>

							</article>

						</div>

					</div>

					<!-- Contact info End -->

					<!-- Contact us Form -->

					<div class="fullwdith po-contactus-form">

						<form id="ajax-contact" method="POST" action="{{route('send')}}" style="list-style: none;">

							<div class="col-sm-6">

								<ul class="po-nonlist" style="list-style: none;" >

									<input type="hidden" name="_token" value="{{csrf_token() }}">

									<li><input type="text" placeholder="Nombres"  class="form-control"  name="name" required></li>

									<li><input type="text" placeholder="Apellidos"  class="form-control"  name="lastName" required></li>

									<li><input type="email" placeholder="E-mail"  class="form-control" name="email" required></li>

								</ul>

							</div>

							<div class="col-sm-6">

								<ul class="po-nonlist" style="list-style: none">

									<li><textarea cols="30" rows="4" class="form-control" placeholder="Consulta"

												  name="body" required></textarea></li>

									<li>

										<button type="submit" class="btn btn-success">

											<span class="">Enviar Consulta</span>

											<span class="round">

												<i class="fa fa-send"></i>

											</span>

										</button>

									</li>

									<li id="form-messages"></li>

								</ul>

							</div>

						</form>

					</div>

					<!-- Contact us Form End -->

				</div>

			</div>

			<section class="po-mapsec fullwidth">

				<strong id="btn-map" class="btn-theme black">

					<span class="txt">LOCALIZANOS EN EL MAPA</span>



				</strong>

				<div class="fullwidth" id="contacus-map" style="display: block">

				</div>

			</section>

			<section class="fullwidth po-getsocial po-bgcolor">

				<div class="container">

					<div class="row">

						<div class="col-sm-10 col-sm-offset-1">

							<div class="fullwidth contact-textbox text-center">

								<header class="po-headingborder">

									<h2>ÚNETE A NUESTRAS REDES SOCIALES</h2>

								</header>
 							</div>

						</div>

						<div class="fullwidth po-contactsocial">
							 
							<div class="col-md-20" style="margin-left: 10%">
								<article>
									<figure class="ico-facebook">
										<i class="fa fa-facebook"></i>
									</figure>
									<h3><a href="#">FACEBOOK</a></h3>
									<p><a href="#">Hazte Fan en Facebook</a></p>
								</article>
							</div>
 
							<!--<div class="col-md-20">

								<article>

									<figure class="ico-dribbble">

										<i class="fa fa-dribbble"></i>

									</figure>

									<h3><a href="#">DRIBBBLE</a></h3>

									<p><a href="#">Síguenos en Dribbble</a></p>

								</article>

							</div>-->

							<div class="col-md-20">

								<article>

									<figure class="ico-twitter">

										<i class="fa fa-twitter"></i>

									</figure>

									<h3><a href="#">TWITTER</a></h3>

									<p><a href="#">Síguenos en Twitter</a></p>

								</article>

							</div>

							<div class="col-md-20">

								<article>

									<figure class="ico-google-plus">

										<i class="fa fa-google-plus"></i>

									</figure>

									<h3><a href="#">GOOGLE</a></h3>

									<p><a href="#">Únete a nuestro círculo</a></p>

								</article>

							</div>

							<div class="col-md-20">

								<article>

									<figure class="ico-instagram">

										<i class="fa fa-instagram"></i>

									</figure>

									<h3><a href="#">INSTAGRAM</a></h3>

									<p><a href="#">Nuestra foto más reciente</a></p>

								</article>

							</div>

						</div>

					</div>

				</div>

			</section>

		</div>

	@endsection
@extends('webPage.main')
@section('content')
		<!-- Heading Start -->
		<section class="page-heading haslayout">
			<div class="container">
				<div class="row">
					<h1>Últimas Fotos</h1>
				</div>
			</div>
		</section>
		<!-- Heading End -->
		<!-- Gallery Start -->
		<div class="gallery-section haslayout">
				<div class="container">
					<div class="row">
						<h2>Galería de Fotos</h2>
						<div class="gallery">
							<!-- begin filter -->
							<ul id="gallery-cats" class="option-set">
								<li class="select">
									<a href="#" class="btn-theme black" data-filter="*">
										<span class="txt">All</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="btn-theme black" data-filter=".spring">
										<span class="txt">Spring</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="btn-theme black" data-filter=".summer">
										<span class="txt">Summer</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="btn-theme black" data-filter=".autumn">
										<span class="txt">Autumn</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</li>
								<li>
									<a href="#" class="btn-theme black" data-filter=".winter">
										<span class="txt">Winter</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</li>
							</ul>
							<!-- end filter -->
							<div id="portfolio-content" class="portfolio-content isotope">
								<article class="gallery-item col-sm-4 spring">
									<a href="images/img2.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/img2.jpg" alt="image description"></a>
									<a href="#" class="btn-theme btn-date red">
										<span class="txt">21/05/2015</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</article>
								<article class="gallery-item col-sm-4 summer">
									<a href="images/img3.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/img3.jpg" alt="image description"></a>
									<a href="#" class="btn-theme btn-date red">
										<span class="txt">21/05/2015</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</article>
								<article class="gallery-item col-sm-4 autumn">
									<a href="images/img4.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/img4.jpg" alt="image description"></a>
									<a href="#" class="btn-theme btn-date red">
										<span class="txt">21/05/2015</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</article>
								<article class="gallery-item col-sm-4 winter">
									<a href="images/img5.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/img5.jpg" alt="image description"></a>
									<a href="#" class="btn-theme btn-date red">
										<span class="txt">21/05/2015</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</article>
								<article class="gallery-item col-sm-4 spring">
									<a href="images/img6.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/img6.jpg" alt="image description"></a>
									<a href="#" class="btn-theme btn-date red">
										<span class="txt">21/05/2015</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</article>
								<article class="gallery-item col-sm-4 summer">
									<a href="images/img7.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/img7.jpg" alt="image description"></a>
									<a href="#" class="btn-theme btn-date red">
										<span class="txt">21/05/2015</span>
										<span class="round">
											<i class="fa fa-toggle-right"></i>
										</span>
									</a>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- Gallery End -->
 
	@endsection
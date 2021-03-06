@extends('webPage.main')
@section('content')
<!-- Slider Start -->
 <!-- 
<section class="haslayout" style="padding-top:10px;padding-bottom: 10px;">
  <div class="container">
  <div class="row">
      <div class="sponsors-small-slider owl-carousel owl-theme">
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-01.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-02.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-03.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-04.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-05.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-01.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-02.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-03.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-04.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-05.png" alt="image description">
                    </div>
                </div>
            </div>
        </div>
  </div>
    </div>
</section>
-->
<section class="banner-slider haslayout">
    <div class="container">
        <div class="row">
            <div   class="mainCarousel owl-carousel owl-theme main-slider row">
                <div class="item">
                    <div class="col-sm-6 text-justify">
                        <div class="heading-area">
                            <h1>HALF TRIATHLON IRONRUNA</h1>
                            <span class="date">6 Agosto, 2017</span>
                        </div>
                        <p>HALF TRIATHLON IRONRUNA, llega para quedarse y convertirse en el mejor evento de triathlon de media distancia del país…  ven  y forma parte de esta primera edición, que te dejará más que satisfecho!!!</p>
                        <a href="{{route('register')}}}" class="btn-theme red" data-toggle="modal" data-target=".bs-example-modal-sm">
                            <span class="txt">Inscribirse</span>
                            <span class="round">
                                <i class="fa fa-send"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/slider-images/img1.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-6 text-justify">
                        <div class="heading-area">
                            <h1>HALF TRIATHLON IRONRUNA</h1>
                            <span class="date">6 Agosto, 2017</span>
                        </div>
                        <p>HALF IRONRUNA, llega para quedarse y convertirse en el mejor evento de triathlon de media distancia del país…  ven  y forma parte de esta primera edición, que te dejará más que satisfecho!!!</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/slider-images/img2.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-6 text-justify">
                        <div class="heading-area">
                            <h1>HALF TRIATHLON IRONRUNA</h1>
                            <span class="date">6 Agosto, 2017</span>
                        </div>
                        <p>HALF IRONRUNA, llega para quedarse y convertirse en el mejor evento de triathlon de media distancia del país…  ven  y forma parte de esta primera edición, que te dejará más que satisfecho!!!</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/slider-images/img3.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-6 text-justify">
                        <div class="heading-area">
                            <h1>HALF TRIATHLON IRONRUNA</h1>
                            <span class="date">6 Agosto, 2017</span>
                        </div>
                        <p>HALF IRONRUNA, llega para quedarse y convertirse en el mejor evento de triathlon de media distancia del país…  ven  y forma parte de esta primera edición, que te dejará más que satisfecho!!!</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/slider-images/img4.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="col-sm-6 text-justify">
                        <div class="heading-area">
                            <h1>HALF TRIATHLON IRONRUNA</h1>
                            <span class="date">6 Agosto, 2017</span>
                        </div>
                        <p>HALF IRONRUNA, llega para quedarse y convertirse en el mejor evento de triathlon de media distancia del país…  ven  y forma parte de esta primera edición, que te dejará más que satisfecho!!!</p>
                    </div>
                    <div class="col-sm-6">
                        <img src="images/img19.png" alt="image description">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider End -->
<!-- Welcome Start -->
<section class="welcome-area haslayout">
    <div class="container">
        <div class="row">
            <h2>Bienvenido a Nuestra Triatlón</h2>
            <span class="subtitle">Sé que puedo vencer cualquier desafío</span>
            <div class="description text-justify">
                <p>Para ser un campeón, creo que tienes que ver el panorama general. No se trata de ganar o perder; Se trata de cada día de trabajo duro y de prosperar en un desafío. Se trata de abrazar el dolor que experimentará al final de una carrera y no tener miedo. Creo que la gente piensa demasiado y tiene miedo de un desafío.</p>
            </div>
            <a href="inscription" class="btn-theme black" >
                <span class="">Inscribirse</span>
                <span class="round">
                    <i class="fa fa-send"  ></i>
                </span>
            </a>
        </div>
    </div>
</section>
<!-- Welcome End -->
<!-- Option Start -->
 
<!-- Option End -->
<!-- Latest Race Start -->
<section class="latest-race haslayout">
    <div class="container">
        <div class="row">
            <div class="race-area row">
                <div class="col-sm-7">
                    <div class="border-title">
                        <h3>Últimas carreras</h3>
                    </div>
                    <div id="race-slider" class="race-slider">
                        <div class="item">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <strong class="date">06/08</strong>
                                <span class="venue">HALF TRIATHLON IRONRUNA</span>
                                <div class="description text-justify">
                                    <p>Los 1900 mt de natación se desarrollaran en las aguas de Playa de Agua Dulce del Océano Pacífico, con condiciones de marea muy tranquilas. Los 90 km del sector de ciclismo se desarrollarán a lo largo de la Costa Verde, sobre un circuito plano y muy rápido en su mayor porcentaje.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="inscription" class="btn-theme black">
                        <span class="txt">Ver Todo</span>
                        <span class="round"><i class="fa fa-eye"></i></span>
                    </a>
                </div>
                <div class="col-sm-5">
                    <img src="images/race-img.png" alt="image description">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Race End -->
<!-- Gallery Start -->
<div class="gallery-section haslayout">
    <div class="container">
        <div class="row">
            <h2>Galería de Fotos</h2>
            <div class="gallery">
                <!-- begin filter -->
                <ul id="gallery-cats" class="option-set">
                    <li>
                        <a href="#" class="btn-theme black" data-filter="*">
                            <span class="txt">Todos</span>
                            <span class="round">
                                            <i class="fa fa-toggle-right"></i>
                                        </span>
                        </a>
                    </li>
                    <li  class="select">
                        <a href="#" class="btn-theme black" data-filter=".spring">
                            <span class="txt">Galeria 1</span>
                            <span class="round">
                                            <i class="fa fa-toggle-right"></i>
                                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn-theme black" data-filter=".summer">
                            <span class="txt">Galeria 2</span>
                            <span class="round">
                                            <i class="fa fa-toggle-right"></i>
                                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn-theme black" data-filter=".autumn">
                            <span class="txt">Galeria 3</span>
                            <span class="round">
                                            <i class="fa fa-toggle-right"></i>
                                        </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn-theme black" data-filter=".winter">
                            <span class="txt">Galeria 4</span>
                            <span class="round">
                                            <i class="fa fa-toggle-right"></i>
                                        </span>
                        </a>
                    </li>
                </ul>
                <!-- end filter -->
                <div id="portfolio-content" class="portfolio-content isotope">
                    <article class="gallery-item col-sm-4 spring">
                        <a href="images/custom/33.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/33.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 spring">
                        <a href="images/custom/34.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/34.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 spring">
                        <a href="images/custom/29.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/29.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 spring">
                        <a href="images/custom/30.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/30.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
                    <article class="gallery-item col-sm-4 summer">
                        <a href="images/custom/31.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/31.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					
					<article class="gallery-item col-sm-4 summer">
                        <a href="images/custom/3.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/3.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					
                    <article class="gallery-item col-sm-4 autumn">
                        <a href="images/img4.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/img4.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 autumn">
                        <a href="images/custom/16.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/16.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 autumn">
                        <a href="images/custom/15.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/15.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 autumn">
                        <a href="images/custom/14.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/14.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 autumn">
                        <a href="images/custom/17.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/17.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 autumn">
                        <a href="images/custom/23.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/23.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
                    <article class="gallery-item col-sm-4 winter">
                        <a href="images/img5.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/img5.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 winter">
                        <a href="images/custom/25.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/25.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 winter">
                        <a href="images/custom/6.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/6.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 winter">
                        <a href="images/custom/7.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/7.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					
					<article class="gallery-item col-sm-4 winter">
                        <a href="images/custom/10.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/10.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
                    <article class="gallery-item col-sm-4 spring">
                        <a href="images/custom/7.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/7.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
                    <article class="gallery-item col-sm-4 summer">
                        <a href="images/custom/13.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/13.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					 <article class="gallery-item col-sm-4 summer">
                        <a href="images/custom/14.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/14.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 summer">
                        <a href="images/custom/11.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/11.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
					<article class="gallery-item col-sm-4 summer">
                        <a href="images/custom/12.jpg" data-rel="prettyPhoto[gallery1]"><img src="images/custom/12.jpg" alt="image description"></a>
                        <a href="#" class="btn-theme btn-date red">
                            <span class="txt">21/05/2017</span>
                            <span class="round">
                                            <i class="fa fa-edit"></i>
                                        </span>
                        </a>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->
<!-- News and Event Start -->
<section class="news-event-section haslayout">
    <div class="container">
        <div class="row">
            <h2>Noticias y Eventos</h2>
            <div class="description"><p>¡Manténgase en contacto con nosotros y sea el primero que conozca las últimas noticias y eventos!</p></div>
            <div id="news-event-slider" class="news-event-slider owl-carousel owl-theme">
                <div class="item">
                    <img src="images/img8.jpg" alt="image description">
                    <div class="foot">
                        <a class="foot" href="#">
                            <i class="fa fa-edit"></i>
                            <span class="title">Introducing Women for Tri</span>
                            <span class="date">
                                            <em class="fa fa-calendar-o"></em>
                                            <em>12/05/2017</em>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/img9.jpg" alt="image description">
                    <div class="foot">
                        <a class="foot" href="#">
                            <i class="fa fa-edit"></i>
                            <span class="title">Introducing Women for Tri</span>
                            <span class="date">
                                            <em class="fa fa-calendar-o"></em>
                                            <em>12/05/2017</em>
                                        </span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/img10.jpg" alt="image description">
                    <div class="foot">
                        <a class="foot" href="#">
                            <i class="fa fa-edit"></i>
                            <span class="title">Introducing Women for Tri</span>
                            <span class="date">
                                            <em class="fa fa-calendar-o"></em>
                                            <em>12/05/2017</em>
                                        </span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/img9.jpg" alt="image description">
                    <div class="foot">
                        <a class="foot" href="#">
                            <i class="fa fa-edit"></i>
                            <span class="title">Introducing Women for Tri</span>
                            <span class="date">
                                            <em class="fa fa-calendar-o"></em>
                                            <em>12/05/2017</em>
                                        </span>
                        </a>
                    </div>v>
                </div>
                <div class="item">
                    <img src="images/img10.jpg" alt="image description">
                    <div class="foot">
                        <a class="foot" href="#">
                            <i class="fa fa-edit"></i>
                            <span class="title">Introducing Women for Tri</span>
                            <span class="date">
                                            <em class="fa fa-calendar-o"></em>
                                            <em>12/05/2017</em>
                                        </span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/img9.jpg" alt="image description">
                    <div class="foot"></div>
                </div>
                <div class="item">
                    <img src="images/img10.jpg" alt="image description">
                    <div class="foot">
                        <a class="foot" href="#">
                            <i class="fa fa-edit"></i>
                            <span class="title">Introducing Women for Tri</span>
                            <span class="date">
                                            <em class="fa fa-calendar-o"></em>
                                            <em>12/05/2017</em>
                                        </span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/img9.jpg" alt="image description">
                    <div class="foot">
                        <a class="foot" href="#">
                            <i class="fa fa-edit"></i>
                            <span class="title">Introducing Women for Tri</span>
                            <span class="date">
                                            <em class="fa fa-calendar-o"></em>
                                            <em>12/05/2017</em>
                                        </span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/img10.jpg" alt="image description">
                    <div class="foot">
                        <a class="foot" href="#">
                            <i class="fa fa-edit"></i>
                            <span class="title">Introducing Women for Tri</span>
                            <span class="date">
                                            <em class="fa fa-calendar-o"></em>
                                            <em>12/05/2017</em>
                                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News and Event End -->
<!-- Our Sponsors Start -->
<section class="our-sponsors haslayout">
    <div class="container">
        <div class="row">
            <div class="border-title">
                <h2>Nuestros Patrocinadores</h2>
            </div>
            <div id="sponsors-slider" class="sponsors-slider owl-carousel owl-theme">
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-01.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-02.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-03.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-04.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-05.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-01.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-02.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-03.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-04.png" alt="image description">
                    </div>
                </div>
                <div class="item">
                    <div class="box">
                        <img src="images/sponsor-05.png" alt="image description">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Sponsors End -->
<!-- Competitors Start -->
<div class="competitor-section haslayout">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-xs-12 pull-right">
                <div class=" ">
                    <h2>Saber más acerca de las <strong>competencias.</strong></h2>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="{{route('send')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token() }}">
                            <div class="form-group">
                                <label>Nombres</label>
                                <input type="name" name="name" required class="form-control"/>
                            </div><div class="form-group">
                                <label>Apellidos</label>
                                <input type="name" name="lastName" required class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="email" name="email" required class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Mensaje</label>
                                <textarea name="body" class="form-control"  required style="resize: none;" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success pull-right" >Enviar <i class="fa fa-send"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="competitor">

                <div class="col-sm-7 col-xs-12 pull-left competitor-img" style="margin-top: 50px;">
                    <img src="images/img11.png" alt="image description">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Competitors End -->
@endsection
@section('scripts')

    @endsection

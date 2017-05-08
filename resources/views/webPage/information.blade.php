@extends('webPage.main')
@section('styles')
    <style>
        .imgSlider{
         /* width: 100%;*/

        }
    </style>
@endsection
@section('content')
    <!-- Heading Start -->
    <section class="page-heading haslayout">
        <div class="container">
            <div class="row">
                <h1>Información</h1>
            </div>
        </div>
    </section>
    <!-- Slider Start -->
    <section class="haslayout">
                <div   class="informationCarousel owl-carousel owl-theme">
                        <div class="item">
                                <img src="images/slider-images/1.jpg"  class="imgSlider"/>
                        </div>
                        <div class="item">
                                <img src="images/slider-images/2.jpg" class="imgSlider"/>
                        </div>
                        <div class="item">
                                <img src="images/slider-images/3.jpg"   class="imgSlider"/>
                        </div>

                    </div>
    </section>
    <!-- Slider End -->
    <!-- Heading End -->
    <div class="blog-post haslayout">
        <div class="container">
            <div class="row">
                <article class="post single">

                    <h2>Un triatlón impresionante</h2>
                    <span class="date">06 de Agosto, 2017</span>
                    <div class="description text-justify">
                        <p>Este próximo domingo 06 de agosto del 2017, se llevará a cabo la primera edición del “HALF IRONRUNA”, competencia que se desarrollará a lo largo y ancho de la Costa Verde, en Lima, Perú, lugar  tradicional por excelencia de los primeros triathlones desarrollados en nuestro país desde la década de los ´80s.
                        </p>
                        <p>Los 1900 mt de natación se desarrollaran en las aguas de  Playa de Agua Dulce del Océano Pacífico, con condiciones de marea muy tranquilas.Los 90 km del sector de ciclismo se desarrollarán a lo largo de la Costa Verde, sobre un circuito plano y muy rápido en su mayor porcentaje.Los 21 km del sector de carrera,  serán completados frente al circuito de playas de la Costa Verde, ofreciendo vistas impresionantes y muy hermosas, para finalizar en el corazón de la ya tradicional Playa de Agua Dulce.
                        </p>
                        <p>“HALF IRONRUNA”, llega para quedarse y convertirse en el mejor evento de triathlon de media distancia del país…  ven  y forma parte de esta primera edición, que te dejará más que satisfecho!!!
                        </p>
                       </div>
                       <div class="post-img text-center">
                            <a href="#"><img src="images/map-ironruna.png" alt="image description"></a>
                             
                        </div>

                </article>

            </div>
        </div>
    </div>
@endsection
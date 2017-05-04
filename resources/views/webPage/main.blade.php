<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""><![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""><![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""><![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""><!--<![endif]-->

<!-- Mirrored from 786themes.net/html/triathlon/triathlon/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2017 17:29:59 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Iron Runa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">



    <link href="css/plugins/owlcarousel/owl.carousel.css"rel="stylesheet">
    <link href="css/plugins/owlcarousel/owl.theme.default.css" rel="stylesheet"  >

    <link href="css/icomoon.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
   <!---->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/color.css" rel="stylesheet" type="text/css">
    <!--pluginss-->
    <link href="css/animate.css" rel="stylesheet" type="text/css">


    <link href='css/plugins/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/plugins/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />

    @yield('styles')
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body  >
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please
    <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div id="wrapper">
    <!-- Header Start -->
    <header id="header" class="haslayout" style="height: 400px">
        <div class="topbar haslayout">
            <div class="container">
                <div class="row">
                    <div class="pull-left">
                        <div class="dropdown">
                            <button class="btn-dropdown btn-languages" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <span>ES</span>
                                <i class="fa fa-level-down"></i>
                            </button>
                            <ul class="dropdown-menu languages" aria-labelledby="languages">
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="pull-right">
                          <div class="dropdown" >
                                 @if (session()->has('userName'))
                              
                                        <button class="btn-dropdown" type="button" data-toggle="dropdown" >{{ session('userName')}} 
                                        <span class="fa fa-level-down"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('logout')}}">Cerrar Sesión</a></li>
                                        </ul>
                             
                                    @else

                                   <a  class="btn-dropdown" style="margin-left:7px;color: white;text-decoration: none" href="register">Crear Cuenta</a> 

                                    <a class="btn-dropdown" style="margin-left:7px;color: white;text-decoration: none" href="login">Iniciar Sesión</a> 
                                @endif
                                       </div>
                         
                    </div>
                </div>
            </div>
        </div>
        <div class="navigation-area haslayout" style="height:200px" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4 bounceInLeft animated" style="padding:20px;display: block; " ><a href="index">
                            <img src="images/logo2.png" alt="" width="400" height="60"></a></div>
                    <nav id="nav" class="nav-bar haslayout" >
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul>
                                <li class=" de "><a href="index" data-hover="Inicio">Inicio</a></li>
                                <li><a href="inscription" data-hover="Inscripción">Inscripción</a></li>
                                <li><a href="schedule" data-hover="Programa">Programa</a></li>
                                <li><a href="byLaw" data-hover="Reglamento">Reglamento</a></li>
                                <li><a href="information" data-hover="Información">Información</a></li>
                                <li><a href="gallery" data-hover="Galería">Galería</a></li>
                                <li><a href="contactus" data-hover="Contáctenos">Contáctenos</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- sections-->
        @yield('content')
<!-- Footer Start -->
    <footer id="footer" class="haslayout">
       
        <div class="container footer">
        

            <div class="row">
              
                <div class="bottom-strip">
                    <span class="copyright">© 2017  |  All Rights Reserved</span>
                  <a id="btn-backtotop"   class="btn-backtotop" href="#">
                   <!-- <span>Volver Arriba</span>-->
                </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- Modal Box Start -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog">
        <div class="modal-dialog newsletter">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="icon-close" aria-hidden="true"></span></button>
                <img src="images/img18.png" alt="image description">
                <div class="content-box">
                    <h2>¿Nuevo en Iron Runa?</h2>
                    <p>Sé el primero en ver nuestras últimas noticias y promociones con tu correo electrónico:</p>
                    <form class="newsletter-form">
                        <fieldset>
                            <input type="email" class="form-control" placeholder="Email ">
                            <button class="btn-theme btn-getstarted" type="submit">Empezar<i class="icon-arrow-right-latest-races"></i></button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Box End -->
</div>

<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src='js/plugin/fullcalendar/lib/moment.min.js'></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script src="js/plugin/fullcalendar/fullcalendar.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://use.fontawesome.com/279ccc989e.js"></script>

<script src="js/plugin/owlcarousel/owl.carousel.js"></script>
<script src="js/jquery.isotope.min.js"></script>

<script src="js/jquery.prettyPhoto.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCASw9IQlNZLpxZ9ZKfSrdd4doPyDz9TEg"></script>
<script src="js/gmap3.min.js"></script>

<script src="{{asset('js/plugin/jquery.loadscript/jquery.loadscript.js')}}"></script>
<script src="{{asset('js/jsForm.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="js/main.js"></script>

@yield('scripts')

</body>
</html>
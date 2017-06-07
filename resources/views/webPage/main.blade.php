    <!doctype html>
    <html   lang="" ng-app="beginnersTutorialApp"  ><!--<![endif]-->

    <!-- Mirrored from 786themes.net/html/triathlon/triathlon/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2017 17:29:59 GMT -->
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HALF TRIATHLON IRONRUNA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">



        <link href="css/plugins/owlcarousel/owl.carousel.css" rel="stylesheet">
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
        <header id="header" class="haslayout" >
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
                                                <li><a href="{{route('logout')}}">Cerrar Sesi&oacute;n</a></li>
                                            </ul>
                                 
                                        @else

                                       <a  class="btn-dropdown" style="margin-left:7px;color: white;text-decoration: none" href="register">Crear Cuenta</a> 

                                        <a class="btn-dropdown" style="margin-left:7px;color: white;text-decoration: none" href="login">Iniciar Sesi&oacute;n</a> 
                                    @endif
                                           </div>
                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-area haslayout" >
                <div class="container">
                    <div class="row">
                      <section >
                        <div class="col-md-4 col-xs-4 pull-right">
                               <div class="pull-right">
                                   <a href="sponsor"><img src="images/sponsors/1.png" class="img-responsive bounceIn animated" width="70" height="40"></a>
                                   <a href="sponsor"><img src="images/sponsors/2.png" class="img-responsive bounceIn animated  " width="70" height="40"></a>
                               </div>
                          </div>
                        <div class="col-md-4 col-xs-4 pull-right bounceIn animated"  style="margin-top: 60px ;margin-bottom: 100px; "  >
                        <a href="index"  >
                        <img src="images/logo2.png" class="img-responsive" width="400" height="250" ></a>
                        </div>
                      </section>
                        <nav id="nav" class="nav-bar haslayout">
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
                                    <li><a href="inscription" data-hover="Inscripci&Oacute;n">Inscripci&Oacute;n</a></li>
                                    <li><a href="schedule" data-hover="Programa">Programa</a></li>
                                    <li><a href="byLaw" data-hover="Reglamento">Reglamento</a></li>
                                    <li><a href="information" data-hover="Informaci&Oacute;n">Informaci&Oacute;n</a></li>
                                    <li><a href="gallery" data-hover="Galer&Iacute;a">Galer&Iacute;a</a></li>
                                    <li><a href="sponsor" data-hover="Sponsor">Sponsor</a></li>
                                    <li><a href="contactus" data-hover="Cont&Aacute;ctenos">Cont&Aacute;ctenos</a></li>

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
                        <span class="copyright">Implementado por <a href="https://web.facebook.com/IT.SKILL.CONSULTING" target="_blank"><font color="FFFFFF">IT SKILL 2017</font></a>  |  All Rights Reserved</span>
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
                        <h2>??Nuevo en IronRuna?</h2>
                        <p>S�� el primero en ver nuestras ��ltimas noticias y promociones con tu correo electr&Oacute;nico:</p>
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

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.min.js"></script>


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
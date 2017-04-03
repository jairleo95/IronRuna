@extends('webPage.main')
@section('content')
<!-- Our Sponsors End -->
            <!-- Competitors Start -->
<div class="competitor-section haslayout">
                <div class="container">
                    <div class="row">
                        <div class="competitor">
                            <div class="col-sm-5 col-xs-12 pull-right">
                                <div class="border-title">
                                    <h2>Saber más acerca de las <strong>competencias.</strong></h2>
                                    <p>Suscribete primero a nuestra página para poder reservar...</p>
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
                                                <span class="txt">Enviar</span>
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
            <!-- Footer Start -->
@endsection
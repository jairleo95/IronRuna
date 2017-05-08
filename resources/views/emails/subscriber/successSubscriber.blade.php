@extends('webPage.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">¡Datos completados correctamente!</h3></div>
                    <div class="panel-body">
                        <h4>Hemos enviado a tu correo la confirmación de tu cuenta, porfavor revisalo.</h4>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Log In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
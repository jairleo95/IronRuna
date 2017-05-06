@extends('webPage.main')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('content')
    <div class="container">
           <div class="row">
                   <div class="col col-md-8 col-md-offset-2" ><div class="panel panel-default"><div class="panel-heading"><h3>Tu ticket ha sido registrado, por favor realiza el pago respectivo </h3></div><div class="panel-body"><div class="well">
<!-- Left-aligned -->
<div class="media">
  <div class="media-left media-middle">
    <img src="images/LogoBCP.png" class="media-object" style="width:150px;">
  </div>
  <div class="media-body">
    <h4 class="media-heading text-danger">S/. 250.00</h4>
   <span class="text-info">Código de Cuenta : </span><span>191-2232328-0-66</span><br>
     <span class="text-info">Moneda : </span><span>Soles</span><br>
      <span class="text-info">Código de Cuenta Interbancario : </span><span>002-191-002232328066-63</span><br>
  </div>
</div>

   
</div>
                    </div><div class="panel-footer">
                                       <a href="inscription" class="btn btn-primary pull-right">ok</a>

                                       </div>
                        </div>
                        </div>
               </div>
    </div>
@endsection
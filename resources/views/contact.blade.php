@extends('app')
@section('content')

        <div class="row">
                   <div class="col col-md-6 col-md-offset-3" >
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title">Formulario de contacto</h3></div>
                            <div class="panel-body">
                                <form action="{{route('send')}}" method="post">
                                    <input type="hidden" name="_token" value="{{csrf_token() }}">
                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <input type="email" name="email" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                           <input type="text" name="subject" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="body" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Send</button>
                                        </div>
                                </form>
                            </div>
                            </div>
                    </div>
               </div>

@endsection
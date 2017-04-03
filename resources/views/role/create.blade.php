@extends('app')
@section('content')
    <div class="row">
         <div class="col col-md-6 col-md-offset-3" >
                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Role</h3></div>
                        <div class="panel-body">
                            <form action="{{route('createRole')}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label> Role</label>
                                    <input type="text" name="name" class="form-control" /></div>
                                <div class="form-group"><button type="submit" class="btn btn-success">Enviar</button></div>
                            </form>

                        </div>
                    </div>
            </div>
    </div>
@endsection
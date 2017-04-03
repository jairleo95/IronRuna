@extends('app')
@section('content')
    <div class="row">
        <h1>list of rol</h1>
        @foreach($roles as $role)
            <li>
                {{$role->name}}
            </li>
            @endforeach
    </div>
@endsection

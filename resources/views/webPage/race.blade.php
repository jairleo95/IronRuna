@extends('webPage.main')
@section('content')
 <div ng-view ></div>
 <input type="hidden" name="_token" class="_token" value="{{csrf_token() }}">
@endsection
@section('scripts')
<script type="text/javascript">
    var app = angular.module('beginnersTutorialApp', ["ngRoute"]);

    app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "businessLogic/ticket/inscription.html"
    }) 
    .when("/payDespositNumber", {
        templateUrl : "businessLogic/pay/registerDepositNumber.html"
    });
});

</script>
 
@endsection
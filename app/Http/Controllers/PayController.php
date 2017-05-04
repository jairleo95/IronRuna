<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PayController extends Controller
{
    public function getCheckoutPage()
    {
    	if (session()->has('userName')){
			# code...
			return view('webPage.checkout');
		}else{
  			return  view('webPage.register');
		}  
    }
    public function checkoutAccess($id){
		if (session()->has('userName')){
			# code...
			  Session::put('eventSelected',$id);
			  return  Redirect::route('checkout');
		}else{
  			return  Redirect::route('register');
		}  
    }
}

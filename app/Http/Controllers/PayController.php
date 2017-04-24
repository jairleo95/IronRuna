<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PayController extends Controller
{
    public function getCheckoutPage()
    {
        return view('webPage.checkout');
    }
    public function checkoutAccess($id){
        Session::put('eventSelected',$id);
        return  Redirect::route('checkout');
    }
}

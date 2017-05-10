<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    protected function getAllCountries(){
         $data = DB::table('countries')->orderBy('name','asc')->get();
         return $data;
    }
    
    public function allCountries(){
         $data=$this->getAllCountries();
        //dd($data);
             return response()->json([
                    'data' => $data,
                    'status' => true,
                ]);
    }
}

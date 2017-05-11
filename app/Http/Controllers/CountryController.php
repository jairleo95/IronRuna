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
                  return response()->json([
                        'data' => $data,
                        'status' => true,
                    ]);
        }
        protected function getRegionsByCountryId($id_country){
             $data = DB::table('regions')->where('country_id',$id_country)->orderBy('name','asc')->get();
             return $data;
        }
    
        public function regionsByCountry(Request $request){
         $data=$this->getRegionsByCountryId($request->idCountry);
              return response()->json([
                    'data' => $data,
                    'status' => true,
                ]);
        }

        protected function getCitiesByRegionId($id){
              $data = DB::table('cities')->where('region_id',$id)->orderBy('name','asc')->get();
             return $data;
        }

        public function cityByRegion(Request $request){
             $data=$this->getCitiesByRegionId($request->idRegion);
              return response()->json([
                    'data' => $data,
                    'status' => true,
                ]);
        }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CostController extends Controller
{

    public function  costByEvent(Request $req){

        return response()->json([
            'list' => $this->getCostByIdEvent($req->id),
            'status'=>true

        ]);
    }
        public function getCostByIdEvent($id)
                 {
                $id=decrypt($id);
                $data = DB::table('cost')->where('idEvent','=',$id)->get();
                foreach($data as $key => $value)
                {
                        $data[$key]->idCost = encrypt($value->idCost);
                        $data[$key]->idEvent= encrypt($value->idEvent);
                }
                $value=($data->all());
                return $value;
            }
}

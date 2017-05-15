<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function validateEventInscription(Request $request){
// dd(decrypt($request->idEvent));

 
        if (session()->has('userName')){
            # code...
  
              $idUser=   $request->session()->get('userName');
                $countEvent= DB::select('select count( *) as numPay from userDataPay up , cost c , userData u where up.idCost =c.idCost and u.idUserData=up.idUserData and up.recordStatus=1 and c.idEvent=? and u.userName=? ', [decrypt($request->idEvent), $idUser]);
 

                $arr=[
                'session' => true,
                'EventInscription'=>$countEvent[0]->numPay 
            ];
          

          }else{
             $arr=[
                'session' => false 
            ];  
          }
        return response()->json($arr);        
    }
    public function getAllEvent(){
        $cost = new CostController();
        $eventType = new EventTypeController();
        $data = DB::table('event')->orderBy('initDate','asc')->get();
        $list=$data;
        for ($i =0;$i<count($list);$i++) {
           $list[$i]->eventType=$eventType->getEventTypeById($list[$i]->idEventType);

           $list[$i]->idEvent=encrypt($list[$i]->idEvent);
           unset($list[$i]->idEventType);
            $list[$i]->cost=$cost->getCostByIdEvent($list[$i]->idEvent);
        }
     //   dd($list);
         return response()->json([
            'data' => $data
        ]);
    }
}

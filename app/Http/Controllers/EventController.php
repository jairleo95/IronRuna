<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EventController extends Controller
{

    public function validateEventInscription(Request $request){

        $status=0;
        $message ="Registrate";
        $count=0;
        $sessionStatus= $request->session()->has('userName');
        if ($sessionStatus){
            # code...
               $idUser=$request->session()->get('userName');
               $countEvent= DB::select('select count(c.idEvent) as numPay from userDataPay up , cost c , userData u,pay p where up.idCost =c.idCost and u.idUserData=up.idUserData and up.recordStatus=1 and p.idPay=up.idPay and c.idEvent=? and u.userName=? ', [decrypt($request->idEvent), $idUser]);
               $count=$countEvent[0]->numPay;
               if($count==1){
                   $status=1;
                   $message="En Proceso";
               }else if  ($count==0){
                   $status=2;
                   $message ="Inscribete";
               }
            }
        $arr=[
            'session' => $sessionStatus,
            'EventInscription'=> [
                'status'=>$status,
                'btnLabel'=>$message,
                'count'=> $count
            ]
        ];
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

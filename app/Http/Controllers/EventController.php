<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
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

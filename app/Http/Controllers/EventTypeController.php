<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventTypeController extends Controller
{
    public  function getEventTypeById($id){
        $data = DB::table('eventType')->where('idEventType','=',$id)->get();
         //encrypt id's
        foreach($data as $key => $value)
        {
            $data[$key]->idEventType = encrypt($value->idEventType);
        }
        $data=($data->all());
       return $data;
    }
}

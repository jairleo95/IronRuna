<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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

         // dd("hello");
   return  Redirect::route('register');
 }  
}

protected function create(array $data)
{
 return DB::table('pay')->insert([

  'totalCost'=>$data['totalCost'],
  'idPayAccess'=>$data['idPayAccess'],
  'payStatus'=>$data['payStatus'],
  'payCode'=>$data['payCode'],
  'recordStatus'=>$data['recordStatus'],
  'idTeam'=>$data['idTeam'] 
  ]
  );
}


public  function createPay(Request $request){

if (true) {

 $idTeam='';
}else{
  DB::table('team')->insert(
      [
      'name'=>'team0'
           
      ]);
      $idTeam = DB::table('team')->select('idTeam')->orderBy('idTeam', 'DESC')->first();
}
  
 return $this->create([

  'totalCost'=>$request->input('totalCost'),
  'payStatus'=> false,
  'payCode'=>null,
  'recordStatus'=>true,
  'idPayAccess'=>null,
  'idTeam'=>1
  ]);
}

public function getAllPayByUser(Request $request){
  $sql="select p.idPay,p.payStatus,p.totalCost ,c.name,u.fullName,u.lastName,e.tittle,p.payCode from userdatapay udp, userdata u , pay p , cost c , ironruna.event e  where udp.idUserData=u.idUserData and p.idPay=udp.idPay and c.idCost=udp.idCost and e.idEvent=c.idEvent and u.recordStatus=1 and udp.recordStatus=1 and payByCurrentUserStatus=1";
  //$rpta= DB::select($sql, [decrypt($request->idEvent), $user]);
}

public function payTicketFinalStep (){
 return view('pay.registerDepositNumber');
}
public function getPayCurrentUser(Request $request){
  $user=$request->session()->get('userName');
  $query ="select p.idPay,e.tittle,p.totalCost,c.name ,p.payCode,p.payStatus FROM userDataPay up , cost c , userData u, pay p , ironruna.event e WHERE e.idEvent=c.idEvent AND  p.recordStatus=1 AND e.recordStatus=1 AND  up.idCost =c.idCost AND u.idUserData=up.idUserData  AND p.idPay=up.idPay AND up.recordStatus=1 AND c.idEvent=? AND u.userName=? ";
  $data= DB::select($query, [decrypt($request->idEvent), $user]);

  $data[0]->idPay=encrypt($data[0]->idPay);

  /*format and clear data */
    $data[0]->payStatus=($data[0]->payStatus==0)? false:true;
  return response()->json([
    'data' => $data[0],
    'status'=>true
    ]);
}
public function saveDepositNumber(Request $request){
  $idPay=decrypt($request->idPay);
  $result=   DB::table('pay')->where('idPay', $idPay)->update(['payCode' => $request->depositNumber]);
  return response()->json([
    'status'=> $result
    ]);
}

public function updatePayFinishedStatus(Request $request){
    $idPay=decrypt($request->idPay);
    $result=   DB::table('pay')->where('idPay', $idPay)->update(['payFinished' => $request->payFinished]);
    /*send mail*/
    try {
        $user= new LoginController();
        $userData=$user->findUserDataByUserName($request->session()->get('userName'));
        \Mail::send('emails.bodyTemplate.bodyPayFinishedMessage', ['user'=>$userData], function($message)use ($userData) {
            $message->form($userData[0]->userName, $userData[0]->fullName.' '.$userData[0]->lastName);
            $message->subject('Iron Runa - Pago de Inscripción');
            //receptor
            $message->tos('facturacion@ironruna.com', env('MAIL_NAME'));
        });
    }
    catch(Exception $e){
        // Never reached

    }finally{
        return response()->json([
            'status'=> $result
        ]);

    }


}


}

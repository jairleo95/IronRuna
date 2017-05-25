<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Redirect;
use Mail;

class UserDataPayController extends Controller
{

protected function create(array $data)
	{

		return DB::table('userDataPay')->insert(
			[
			'idUserData' => $data['idUserData'],
			'idPay'=>$data['idPay'],
			'idCost'=>$data['idCost'],
			'payByCurrentUserStatus'=>$data['payByCurrentUserStatus'],
			'unitCost'=>$data['unitCost'],
			'recordStatus'=>$data['recordStatus'] 
			]);

	}
	public function payTicketSuccess(){
		return view('webPage.successPay');
	}

	public function payTicketByUsers(Request $request){
		/*registrar tabla pay*/
			ini_set('max_execution_time', 300); //300 seconds = 5 minutes
    $pay= new PayController();
    $user= new LoginController();
  
    $userData=$user->findUserDataByUserName($request->session()->get('userName'));
    $dataPay =$pay->createPay($request);

    $pay = DB::table('pay')->select('idPay')->orderBy('idPay', 'DESC')->first();
 
   // $userData=$user->findUserDataByUserName($request->session()->get('userName'));
        $rptaInsert=false;
if ($request->costtype==1) {
	# code...
	/*individual pay*/
//$pay = DB::table('pay')->select('idPay')->orderBy('idPay', 'DESC')->first();
		/*Insert userdatapay table */

$arrayPayTicket =[
'idUserData'=>$userData[0]->idUserData,
'idPay'=>$pay->idPay,
'idCost'=> decrypt($request->input('idCost')),
'payByCurrentUserStatus'=>true,
'unitCost'=>$request->input('unitCost'),
'recordStatus'=>true
];
$rptaInsert=$this->create($arrayPayTicket);


/*End Individual pay*/
}else{

/*Postas*/

    $users =$request->input('formUser');

  $emails=[];
  $tokens=[];
   $size =  (count($users));
   for ($r=0; $r < $size; $r++) { 
    $subItem= $users[$r];
    $sizeItem= count($subItem);
     
    for ($e=0; $e < count($subItem); $e++) { 
        $arrUserData[$subItem[$e]['name']]=$subItem[$e]['value'];
        if ($subItem[$e]['name']=='email') {
            # code...
            $arrUserData['userName']=$subItem[$e]['value'];
            array_push($emails,$subItem[$e]['value']);
        } 
        $token=str_random(100);
         array_push($tokens,$token);

          if ($subItem[$e]['name']=='birthdate') {
             $arrUserData['birthdate']=   date('Y-m-d', strtotime(str_replace('-', '/', $subItem[$e]['value'])));
      
        }

    }
     $arrUserData['idRole']=1;
     $arrUserData['userPassword']=null;
     $arrUserData['expirationDate']=null;
     $arrUserData['recordStatus']=1;
       $arrUserData['confirmationStatus']=0;
       $arrUserData['confirmationToken']= $token;
      $register = new RegisterController();
     $register->create($arrUserData);


$userData2=$user->findUserDataByUserName($arrUserData['userName']);
     $arrayPayTicket =[
                        'idUserData'=>$userData2[0]->idUserData,
                        'idPay'=>$pay->idPay,
                        'idCost'=> decrypt($request->input('idCost')),
                        'payByCurrentUserStatus'=>true,
                        'unitCost'=>$request->input('unitCost'),
                        'recordStatus'=>true
                        ];
            $rptaInsert=$this->create($arrayPayTicket);
      
    
        }
 
for ($t=0; $t < count($emails); $t++) { 
   MailController::sendConfirmationSubscriber([
        'email'=>$emails[$t],
        'name'=>'Iron Runa',
        'subject'=>'Iron Runa - Confirmación de subscripción',
        'body'=>$tokens[$t],
        'confirmationURL'=>'http://ironruna.com/subscriberConfirmation/'.$tokens[$t]
        ]);
   
}

}
try {
    \Mail::send('emails.bodyTemplate.bodyPreSaleMessage', ['user'=>$userData], function($message)use ($userData) {
        //remitente
        $message->to($userData[0]->userName, $userData[0]->fullName.' '.$userData[0]->lastName);
        //asunto
        $message->subject('Iron Runa - Pago de Inscripción');
        //receptor
        $message->from('facturacion@ironruna.com', env('MAIL_NAME'));
    });
}
catch(Exception $e){
    // Never reached

}finally{
    return response()->json([
        'submitStatus' => $rptaInsert
    ]);
}


}

}

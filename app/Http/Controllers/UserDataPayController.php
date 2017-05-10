<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Redirect;

class UserDataPayController extends Controller
{
    //

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

		/*individual pay*/
		$pay= new PayController();
		$dataPay =$pay->createPay($request);
		$user= new LoginController();
		$userData=$user->findUserDataByUserName($request->session()->get('userName'));


		//$pay = DB::table('pay')->select('idPay')->orderBy('idPay', 'DESC')->first();

 		/*Insert userdatapay table */
		/*$arrayPayTicket =[
		'idUserData'=>$userData[0]->idUserData,
		'idPay'=>$pay->idPay,
		'idCost'=> decrypt($request->input('idCost')),
		'payByCurrentUserStatus'=>true,
		'unitCost'=>$request->input('unitCost'),
		'recordStatus'=>true
		];*/
		/*End Individual pay*/
		
		/*Postas*/
		/*Insertnew userdata*/
		/*Iterate new user items*/
		$userItemLength=$request->userItemLength;
		dd($userItemLength);

		/*iterar...*/
		$rptaInsert=$this->create($arrayPayTicket);
		   return response()->json([
            'submitStatus' => $rptaInsert

        ]);
	 
    

		/*recibir  usuario(s)*/
		/*sesion actual usuario que registra*/

		/**recibir info de tickets*/


	}

}

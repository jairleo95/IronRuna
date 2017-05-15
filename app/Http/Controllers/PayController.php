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
                'recordStatus'=>$data['recordStatus'] 
                ]
        );
    }

    public  function createPay(Request $request){
 		return $this->create([
                        
                        'totalCost'=>$request->input('totalCost'),
                        'payStatus'=> false,
                        'payCode'=>null,
                        'recordStatus'=>true,
                        'idPayAccess'=>null
                        ]);
    }

        public function getAllPayByUser(Request $request){
            $sql="select p.idPay,p.payStatus,p.totalCost ,c.name,u.fullName,u.lastName,e.tittle,p.payCode from userdatapay udp, userdata u , pay p , cost c , ironruna.event e  where udp.idUserData=u.idUserData and p.idPay=udp.idPay and c.idCost=udp.idCost and e.idEvent=c.idEvent and u.recordStatus=1 and udp.recordStatus=1 and payByCurrentUserStatus=1";
            
        }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\MailController;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        DB::table('userData')->insert(
            [
            'idRole' => $data['idRole'],
            'userName'=>$data['userName'],
            'userPassword'=>bcrypt($data['userPassword']),
            'fullName'=>$data['fullName'],
            'lastName'=>$data['lastName'],
            'gender'=>$data['gender'],
            'documentType'=>$data['documentType'],
            'documentNumber'=>$data['documentNumber'],
            'cellphone'=>$data['cellphone'],
            'birthdate'=>$data['birthdate'],
            'expirationDate'=>$data['expirationDate'],
            'recordStatus'=>$data['recordStatus'],
            'confirmationStatus'=>$data['confirmationStatus'],
            'confirmationToken'=>$data['confirmationToken'],
            'idCategory'=>0,
            'idTeam'=>0,
            'observation'=>$data['observation'],
            'emergencyPhone'=>$data['emergencyPhone'],
            'phone'=>$data['phone']
            ]
            );

    }
    public function getRegister(){
        return view('auth.register');
    }
    public function getUserDataByConfirmationToken($token){
        $userData = DB::select('select * from userData where confirmationToken = ? ', [$token]);
        return $userData;
    }
    public function successRegisterMessage() {
     return view('emails.subscriber.successSubscriber');
 }
 public function findUserDataByDocummentNumber(Request $request){
    $users =$this->getUserDataByDocummentNumer($request->documentNumber);

    if ($users==null) {
                # code...
       $data =['searchStatus'=>false,'isEnabled'=>true];
   }else{
      $data =[
      'searchStatus'=>true,
      'data' =>  [
      'userData'=> [
      'fullName'=>$users->fullName,
      'lastName'=>$users->lastName,
      'idUser'=>encrypt($users->idUserData),
      'isEnabled'=>true
      ]
      ]

      ];
  }
  return response()->json($data);
}    
protected function getUserDataByDocummentNumer ($documentNumber){
    $user = DB::table('userData')->where('documentNumber', $documentNumber)->first();
    
    return $user;
}

public function test(Request $request){

 


}
public function subscriberUser(Request $request){
    $token=str_random(100);
    $this->create(

        [
        'idRole' => 1,
        'userName'=>$request->input('email'),
        'userPassword'=>$request->input('password'),
        'fullName'=>$request->input('fullName'),
        'lastName'=>$request->input('lastName'),
        'gender'=>$request->input('gender'),
        'documentType'=>$request->input('documentType'),
        'documentNumber'=>$request->input('documentNumber'),
        'cellphone'=>$request->input('cellphone'),
        'birthdate'=> date('Y-m-d', strtotime(str_replace('-', '/', $request['birthdate']))),
        'expirationDate'=>date('Y-m-d', null),
        'recordStatus'=>true,
        'confirmationStatus'=>true,
        'confirmationToken'=>$token,
        'category'=>$request->input('category'),
        'observation'=>$request->input('observation'),
        'emergencyPhone'=>$request->input('emergencyPhone'),
        'phone'=>$request->input('phone')
        ]
        );
    try{
        /*Send Email to subscriber confirmation*/
        MailController::sendConfirmationSubscriber([
            'email'=>$request['email'],
            'name'=>'Iron Runa',
            'subject'=>'Iron Runa - Confirmación de subscripción',
            'body'=>$token,
            'confirmationURL'=>'http://ironruna.com/subscriberConfirmation/'.$token
        ]);
    } catch(\Exception $e){
        // Get error here

    }finally{
        return Redirect::route('subscriptionsuccess');
    }


}
public function subscribeConfirmation($token){
   $userData=$this->getUserDataByConfirmationToken($token);
   $rptaView='register';
   if ($userData==null){
    $message= 'La cuenta a la que ingresas no existe!';
}else{
    if ($userData[0]->confirmationStatus==0){
      DB::update('update userData set confirmationStatus = 1 where confirmationToken = ? and recordStatus =1',
        [$token]);
      $rptaView='index';
      $message= 'Se ha confirmado su cuenta correctamente!';
  }else{

    $message= 'Su token de acceso ha expirado!';
}
}

return redirect()->route($rptaView);

}
}

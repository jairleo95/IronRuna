<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
                                                                                                
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function validateUser($user,$pass){

            return DB::select('select * from userData where userName = ?  and userPassword=?', [$user,$pass]);

    }
    public function testQuery(){
         $users = DB::table('userData')->get();
       //  dd($users);
          return response()->json([
            'data' => $users

        ]);
    }
    public function findUserDataByUserName($user){
        return DB::select('select * from userData where userName = ?', [$user]);
    }

    public function getCurrentUserData(Request $req){

        $data =$this->findUserDataByUserName($req->session()->get('userName'));
       return response()->json([
            'userData' => $data[0],
            'session' => true
        ]);
    }

    public function isValidUserName(Request $req){
        $userData=$this->findUserDataByUserName($req->email);

        if ($userData!=null){
            $x =    false;
        }else{
            $x= true;
        }
        return response()->json([
            'valid' => $x

        ]);

    }
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(Request $req)
    {
      $userData=$this->findUserDataByUserName($req->email);
        if ($userData!=null){
            if($userData[0]->recordStatus==1){
                if (    $userData[0]->confirmationStatus=='1') {
                    # code...
                    if(password_verify($req->password,$userData[0]->userPassword)){
                    $rptaView='index';
                    session(['userName' => $userData[0]->userName]);
                }else{
                    $rptaView='login';
                }
                }else{
                      $rptaView='login';

                }
            }else{
                $rptaView='login';
            }
        }else{
            $rptaView='login';
            $message ='Usuario o contraseña incorrecta';
        }
        return redirect()->route($rptaView);
    }
}

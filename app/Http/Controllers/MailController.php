<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mail;

use App\Http\Requests;

class MailController extends Controller
{
    public function index()
    {
        return \View::make('contact');
    }
    public function send(Request $request){
       // ini_set('max_execution_time', 300);
        //guarda el valor de los campos enviados desde el form en un array
        $data = $request->all();
        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
                    \Mail::send('emails.message', $data, function($message) use ($request){
                                //remitente
                                $message->from($request->email, $request->name.' '.$request->lastName);
                                //asunto
                                $message->subject('Iron Runa - Contacto con usuario');
                                //receptor
                                $message->to(env('MAIL_USERNAME'), env('MAIL_NAME'));
                    });
                return \View::make('succ');
    }
    public static function sendConfirmationSubscriber( array $dataEmail){
                    \Mail::send('emails.subscriber.message', $dataEmail, function($message) use ($dataEmail){
                                //remitente
                                $message->from(env('MAIL_USERNAME'), $dataEmail['name']);
                                //asunto
                                $message->subject($dataEmail['subject']);
                                //receptor
                                $message->to($dataEmail['email'], env('MAIL_NAME'));
                    });
                   
              
              
    }
        public  function sendMultipleMails(Request $req){
          //  dd($req->emails);
        //    $emails = ['jairleo95@gmail.com', 'jairsantos@upeu.edu.pe'];
            $emails =$req->emails;
    
                    \Mail::send('emails.registerEventMessage', $emails, function($message) use ($emails) {
                                //remitente
                                $message->to($emails, 'Nombree');
                                //asunto
                                $message->subject(' Usted ha separado su ticket');
                                //receptor
                             $message->from(env('MAIL_USERNAME'), env('MAIL_NAME'));
                    });
                   
              
              
    }

}

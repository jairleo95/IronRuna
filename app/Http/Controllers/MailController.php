<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;

class MailController extends Controller
{
    public function index()
    {
        return \View::make('contact');
    }
    public function send(Request $request){
        //guarda el valor de los campos enviados desde el form en un array
        $data = $request->all();
        //se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
                    \Mail::send('emails.message', $data, function($message) use ($request){
                                //remitente
                                $message->from($request->email, $request->name.' '.$request->lastName);
                                //asunto
                                $message->subject('Iron Runa - Contacto con usuario');
                                //receptor
                                $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
                    });
                return \View::make('succ');
    }
    public static function sendConfirmationSubscriber( array $dataEmail){
                    \Mail::send('emails.subscriber.message', $dataEmail, function($message) use ($dataEmail){
                                //remitente
                                $message->from($dataEmail['email'], $dataEmail['name']);
                                //asunto
                                $message->subject($dataEmail['subject']);
                                //receptor
                                $message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));
                    });
                return \View::make('emails.subscriber.successSubscriber');
    }
}

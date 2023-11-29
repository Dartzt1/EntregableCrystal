<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function enviarcorreo(Request $request){
      
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $asunto = $request->input('asunto');
        $mensaje = $request->input('mensaje');
        $para = 'adriel_louis_pillpa@hotmail.com';

        Mail::send('cuerpo', $request->all(), function($msg) use($asunto, $nombre, $email, $para){
            $msg->from($email,$nombre);
            $msg->subject($asunto);
            $msg->to($para);
            
        });
        return view('contacto');
    }

        

}
// <form action="{{route('enviarcorreo')}}" method="POST" id="commentform" class="comment-form">
// @csrf
// <input type="text" name="nombre" class="" placeholder="Nombre*">
// <input type="email" name="email" class="" placeholder="Email*">
// <input type="text" name="asunto" class="" placeholder="Asunto*">
// <textarea name="mensaje" id="role" cols="30" rows="9"
//     placeholder="Mensaje"></textarea>
// <button type="submit" class="lab-btn">
//     <span>Envianos un mensaje</span>
// </button>
// </form>
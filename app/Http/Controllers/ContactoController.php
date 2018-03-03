<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactoController extends Controller
{
    //
    public function index ()
    {
    	return view('contacto.index');

    }

    public function enviar_correo(Request $request)
	{
		$data= array(
		    'nombre'=>$request->nombre,
		    'apellido'=>$request->apellido,
		    'email'=>$request->email,
		    'mensaje'=>$request->mensaje,
		);

		  Mail::send('contacto.request',$data,function($message) use($data){
		    $message->from($data['email'],$data['nombre']);
		    //$message->from('perez10ariel@gmail.com',$data['nombre']);
		    $message->to('gotze19ariel@gmail.com','chele')->subject('Consulta');
		});

	 	return redirect('contactanos');
	}
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\solicitudes;
use App\Http\Requests;
use Mail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SolicitudController extends Controller
{


     
public function store(Requests\LoginValidador $request){


if(Auth::attempt(['usuario' => $request['usuario'],'password' => $request['pass']])){

           if(Auth::user()->nivel == '1') {return Redirect::intended('menu');}
           else
           if(Auth::user()->nivel == '2') {return Redirect::intended('logout');}           

       }

       return Redirect::intended('/');

    }


    public function logout()
    {
        Auth::logout();
        return Redirect::intended('/');
    }

    
    	///$solicitudes = solicitudes::with('departamento','empleado','motivo','sucursal')->where('estatus','PENDIENTE')->get();

	/*	Mail::send("correo", [], function($message) {
        $message->to("kevind@aduanaldelvalle.mx", "Jeen Kevin")
        ->subject("Correos de pruebass!");
     });*/
    	
    	///return  view('login.login');//response()->json(['status'=>'ok','data'=>$solicitudes], 200);
///return  $solicitudes;//view('solicitud',compact('solicitudes'));
//return view('solicitud',compact('solicitudes'));
     
}

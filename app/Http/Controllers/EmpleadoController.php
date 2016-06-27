<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmpleadoController extends Controller
{

  public function __construct(){
        $this->middleware('auth');///se configura en midlewere/autenticate para proteger las rutas
        $this->middleware('empleado');
    }

  public function index(){
    $day = Carbon::now();
   $ncf = NCF_etapa1::with('User','User2')->where('responsable','=',Auth::User()->id)->paginate(15);
   $usuarios = User::lists('NombreC','id');
   return view('vistas.listancf',compact('ncf','day','usuarios'));
  }

  public function store(){}

  public function delete(){}
}

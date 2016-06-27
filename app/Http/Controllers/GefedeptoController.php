<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use Carbon\Carbon;
use App\NCF_etapa1;
use App\User;


class GefedeptoController extends Controller
{
  public function __construct(){
        $this->middleware('auth');///se configura en midlewere/autenticate para proteger las rutas
        $this->middleware('gefeDepto');
    }

    public function index(){
      $day = Carbon::now();

     $ncf = NCF_etapa1::with('User','User2')->where('responsable','=',Auth::User()->id)->paginate(15);
     $usuarios = User::lists('NombreC','id');
     return view('vistas.listancf',compact('ncf','day','usuarios'));
      return view('vistas.listancf');

    }

    public function store(){}

    public function delete(){}
}

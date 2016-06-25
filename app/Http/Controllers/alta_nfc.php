<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\NCF_etapa1;
use Carbon\Carbon;
use App\User;
class alta_nfc extends Controller
{

	public function __construct(){
        $this->middleware('auth');///se configura en midlewere/autenticate para proteger las rutas
        $this->middleware('calidad');

    }
    

		public function index(){
			 $day = Carbon::now();

			$ncf = NCF_etapa1::with('User','User2')->where('responsable','=',Auth::User()->id)->paginate(15);
			$usuarios = User::lists('NombreC','id');
			$vista = 'listancf';
			return view('menu.contenedor',compact('vista','ncf','day','usuarios'));
			}


		public function store(Request $request){

				$TIPO  = $request->input('sel1');
			    $last  = NCF_etapa1::where('numNCF','LIKE', '%'.$TIPO.'%' )->orderBy('id', 'desc')->count();
			    $fecha = $request->input('fecha');
			    ///addDays(29)

				$codigo = $TIPO.'-'. $last = '0' ? '1': $last+1 .'-'.$fecha;
			///$last = NCF_etapa1::orderBy('id', 'desc')->first();
			 NCF_etapa1::create(
				['numNCF' =>  $codigo,
				'fecha'   =>  $fecha,
				'Fecha_terminacion' =>  Carbon::now()->addDays(15),
				'id_elaboro'  => Auth::User()->id,
				'responsable' => $request->input('resnc'),
				'descripcion' => $request->input('descdha')]
				);
			 return $codigo;
    	 }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use App\Http\Requests;
use App\User;
use App\departamento;
use App\sucursal;
use App\cargo;

class altaUsuarios extends Controller
{

	public function __construct(){
        $this->middleware('auth');///se configura en midlewere/autenticate para proteger las rutas
        $this->middleware('calidad');
    }

    public function index(){

    	 $usuarios = User::paginate(10);
         $departamento = departamento::lists('Departamento','ID_departamento'); 
         $sucursal = sucursal::lists('nom_Sucursal','ID');
         $cargo = cargo::lists('nom_cargo','int');

    	$vista = 'altausuarios';
			return view('menu.contenedor',compact('vista','usuarios','departamento','sucursal','cargo'));
    }


    public function store(Request $request){

           User::create(
            ['NombreC'      =>  $request->input('nombre'),
            'departamento' =>  $request->input('depto'),
            'sucursal'     =>  $request->input('suc'),
            'usuario'      =>  $request->input('usuario'),
            'correo'       =>  $request->input('correo'),
            'backup_pass'  =>  $request->input('password'),
            'password'     =>  bcrypt($request->input('password')),
            'nivel'        =>  $request->input('cargo')]
            );
           return redirect('alta');
    }



    



}

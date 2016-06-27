<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GerenteareaController extends Controller
{
  public function __construct(){
        $this->middleware('auth');///se configura en midlewere/autenticate para proteger las rutas
        $this->middleware('gerenteArea');
    }


    public function index(){
        return view('vistas.listancf');
    }

    public function store(){}

    public function delete(){}
}

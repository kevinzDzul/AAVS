<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitudes extends Model
{
    protected $table = 'registro';


public function  departamento(){
        return $this->hasOne('App\departamento','ID_departamento','Depto')->select(array('ID_departamento','Departamento'));
    }

    public function empleado(){
    	return $this->hasOne('App\usuarios','ID_usuario','ID_usuario')->select(array('ID_usuario','nombres','Apellido_PAT','Apellido_Mat'));
    }

     public function motivo(){
    	return $this->hasOne('App\motivo','ID_motivo','ID_motivo');
    }

     public function sucursal(){
    	return $this->hasOne('App\sucursal','ID','Sucursal')->select(array('ID',"nom_Sucursal"));
    }



}

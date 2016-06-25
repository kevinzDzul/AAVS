<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NCF_etapa1 extends Model
{
    protected $table = 'ncf';

    protected $fillable = [
        'id',
        'numNCF',
        'fecha',
        'Fecha_terminacion',
        'id_elaboro',
        'responsable',
        'descripcion',
    ];


    public function User(){
    	return $this->hasOne('App\User','id','id_elaboro')->select(array('id','NombreC'));
    }
    public function User2(){
    	return $this->hasOne('App\User','id','responsable')->select(array('id','NombreC'));
    }
}

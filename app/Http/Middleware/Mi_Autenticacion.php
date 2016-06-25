<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Session\Store;

abstract class Mi_Autenticacion
{
    public function __construct(Guard $auth,Store $session){

        $this->auth = $auth;
        $this->session = $session;

    }

abstract public function getType();

    public function handle($request, Closure $next)
    {
        
        /*Distinguimos que tipo de Administrador es el que se va aloguear*/
        if(! $this->auth->user()->is($this->getType())){///isAdmin creado en el modelo del user
            $this->auth->logout();
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->to('/');/* se puede cambiar guest por to*/
            }
        }
        return $next($request);
    }
}

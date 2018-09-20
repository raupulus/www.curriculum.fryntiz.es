<?php

/**
 * Este middleware comprueba el rol al que pertenece el usuario
 */

namespace App\Http\Middleware;

use Closure;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Almaceno todos los parámetros recibidos y elimino los dos primeros
        $roles = array_slice(func_get_args(), 2);

        // Compruebo si alguno de los roles admitidos lo tiene el usuario
        if (auth()->user()->hasRoles($roles)) {
            return $next($request);
        }

        // Si el usuario actual no tiene permisos por rol, se redirecciona a /
        return redirect('/');
    }
}

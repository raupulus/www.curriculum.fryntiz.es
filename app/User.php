<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Recibe un Array con los roles a los que se le permiten las acciones y
     * comprueba si el usuario autenticado pertenece a alguno de esos roles.
     * @param  array   $roles Roles a comprobar si pertenece el usuario.
     * @return boolean        Devuelve boolean indicando si contiene el rol.
     */
    public function hasRoles(array $roles)
    {
        foreach ($roles as $role) {
            if ($this->role === $role) {
                return true;
            }
        }

        return false;
    }
}

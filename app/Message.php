<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Nombre de la tabla
    protected $table = 'messages';

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'first_name',
        'last_name',
        'subject',
        'email',
        'message'
    ];
}

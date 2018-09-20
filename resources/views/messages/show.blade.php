<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', 'Message')

{{-- Descripción --}}
@section('description', 'Message')

{{-- Palabras clave --}}
@section('keywords', 'curriculum, curriculum online, Raúl Caro Pastorino, contact')

{{-- Contenido de la sección --}}
@section('content')
    <h2>Mensajes</h2>
    <p>
        Enviado por {{ $msg->first_name }} - {{ $msg->email }}
    </p>
    <p>
        {{ $msg->message }}
    </p>
@stop

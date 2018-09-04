<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', 'Login')

{{-- Descripción --}}
@section('description', 'Login')

{{-- Palabras clave --}}
@section('keywords', 'Login, curriculum, curriculum online, Raúl Caro Pastorino, contact')

{{-- Contenido de la sección --}}
@section('content')
    <h2>Login</h2>
    <form method="POST" action="/login">
        {!! csrf_field() !!}
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        <input type="submit" value="Entrar" />
    </form>

    <br />

@stop

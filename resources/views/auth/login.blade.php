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
    <form method="POST" action="/login" class="form-inline">
        {!! csrf_field() !!}
        <div class="form-group">
            {{-- <label for="email">Email</label> --}}
            <input class="form-control" type="email" name="email" placeholder="Email" />
        </div>

        <div class="form-group">
            {{-- <label for="password">Password</label> --}}
            <input class="form-control" type="password" name="password" placeholder="Password" />
        </div>

        <input class="btn btn-primary" type="submit" value="Entrar" />
    </form>
@stop

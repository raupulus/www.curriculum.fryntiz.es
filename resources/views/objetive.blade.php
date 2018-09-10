{{--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
--}}

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', trans('titles.objetive'))

{{-- Descripción --}}
@section('description', trans('objetive.description'))

{{-- Palabras clave --}}
@section('keywords', trans('objetive.keywords'))

{{-- Contenido de la sección --}}
@section('content')
    <h2>{{ trans('objetive.title') }}</h2>
    <h3>{{ trans('objetive.description') }}</h3>

    <div>
        <section>
            Contenido
        </section>
    </div>
@stop

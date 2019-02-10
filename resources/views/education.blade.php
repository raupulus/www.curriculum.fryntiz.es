{{--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
--}}

@extends('layouts.app')

{{-- Título de la página --}}
@section('title', trans('titles.education'))

{{-- Descripción --}}
@section('description', trans('education.description'))

{{-- Palabras clave --}}
@section('keywords', trans('education.keywords'))

{{-- Contenido de la sección --}}
@section('content')
    <h2>{{ trans('education.title') }}</h2>
    <h3>{{ trans('education.description') }}</h3>

    <div>
        <section>
            Contenido
        </section>
    </div>
@stop

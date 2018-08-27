<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', 'Contact')

{{-- Descripción --}}
@section('description', 'Contact')

{{-- Palabras clave --}}
@section('keywords', 'curriculum, curriculum online, Raúl Caro Pastorino, contact')

{{-- Contenido de la sección --}}
@section('content')
    <h2>Formulario de contacto</h2>
    <form method="POST" action="sendMail">
        <div>
            <div>
            <label for="firstname">firstname</label>
            <input id="firstname" type="text" name="firstname" />
            </div>

            <div>
            <label for="secondname">secondname</label>
            <input id="secondname" type="text" name="secondname" />
            </div>

            <div>
            <label for="subject">subject</label>
            <input id="subject" type="text" name="subject" />
            </div>

            <div>
            <label for="email">email</label>
            <input id="email" type="text" name="email" />
            </div>

            <div>
            <label for="message">message</label>
            <textarea id="message" name="message"></textarea>
            </div>

            <div>
            <label for="registered">Registered</label>
            <input id="message" type="text" name="registered" value="{{ date('Y-m-d') }}" />
            </div>
        </div>

        <input type="submit" />
    </form>
@stop

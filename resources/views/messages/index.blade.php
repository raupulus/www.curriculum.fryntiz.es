<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', 'Messages')

{{-- Descripción --}}
@section('description', 'Messages')

{{-- Palabras clave --}}
@section('keywords', 'Messages, curriculum, curriculum online, Raúl Caro Pastorino, contact')

<style>
    table {
        width: 100%;
    }
</style>

{{-- Contenido de la sección --}}
@section('content')
    <h2>Mensajes</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>email</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($messages as $msg)
                <tr>
                    <td>
                        <a href="{{ route('messages.show', $msg->id) }}">
                            {{ $msg->first_name }}
                        </a>
                    </td>
                    <td>{{ $msg->last_name }}</td>
                    <td>{{ $msg->email }}</td>
                    <td>{{ $msg->message }}</td>
                    <td>
                        <a href="{{ route('messages.edit', $msg->id) }}">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

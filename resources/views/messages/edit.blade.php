<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', 'Edit Message')

{{-- Descripción --}}
@section('description', 'Edit Message')

{{-- Palabras clave --}}
@section('keywords', 'Messages, curriculum, curriculum online, Raúl Caro Pastorino, contact')

{{-- Contenido de la sección --}}
@section('content')
    <h2>Edit Message {{ $msg->id }}, {{ $msg->first_name }}</h2>

    <form method="POST" action="{{ route('messages.update', $msg->id) }}">
        {!! method_field('PUT') !!}
      {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
      {!! csrf_field() !!}

      <div>
        <div>
          <label for="first_name">{{ trans('contact.first_name') }}</label>
          <input id="first_name" type="text" name="first_name"
                                value="{{ $msg->first_name }}" />
          {!! $errors->first('first_name', '<span class="formError">:message</span>') !!}
        </div>

        <div>
          <label for="last_name">{{ trans('contact.last_name') }}</label>
          <input id="last_name" type="text" name="last_name"
                                 value="{{ $msg->last_name }}" />
          {!! $errors->first('last_name', '<span class="formError">:message</span>') !!}
        </div>

        <div>
          <label for="subject">{{ trans('contact.subject') }}</label>
          <input id="subject" type="text" name="subject"
                              value="{{ $msg->subject }}" />
          {!! $errors->first('subject', '<span class="formError">:message</span>') !!}
        </div>

        <div>
          <label for="email">{{ trans('contact.email') }}</label>
          <input id="email" type="text" name="email"
                            value="{{ $msg->email }}" />
          {!! $errors->first('email', '<span class="formError">:message</span>') !!}
        </div>

        <div>
          <label for="message">{{ trans('contact.message') }}</label>
          <textarea id="message" name="message">{{ $msg->message }}</textarea>
          {!! $errors->first('message', '<span class="formError">:message</span>') !!}
        </div>

        <div>
          <label for="registered">{{ trans('contact.registered') }}</label>
          <input id="message" type="text" name="registered" value="{{ $msg->created_at }}" />
        </div>
      </div>

      {{-- Solo se permite enviar un formulario cada 2 minutos --}}
      <div id="sendEmail">
          <input class="btn btn-primary" type="submit" value="{{ trans('contact.update') }}" />
      </div>
    </form>
@stop

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
    <h2>{{ trans('contact.edit') }} {{ $msg->id }}, {{ $msg->first_name }}</h2>

    <form method="POST" action="{{ route('messages.update', $msg->id) }}">
        {!! method_field('PUT') !!}
      {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
      {!! csrf_field() !!}

      <div>
        <div class="form-group">
          <label for="first_name">{{ trans('contact.fields.first_name') }}</label>
          <input id="first_name"
                 class="form-control"
                 type="text"
                 name="first_name"
                 value="{{ $msg->first_name }}" />
          {!! $errors->first('first_name', '<span class="formError">:message</span>') !!}
        </div>

        <div class="form-group">
          <label for="last_name">{{ trans('contact.fields.last_name') }}</label>
          <input id="last_name"
                 class="form-control"
                 type="text"
                 name="last_name"
                 value="{{ $msg->last_name }}" />
          {!! $errors->first('last_name', '<span class="formError">:message</span>') !!}
        </div>

        <div class="form-group">
          <label for="subject">{{ trans('contact.fields.subject') }}</label>
          <input id="subject"
                 class="form-control"
                 type="text"
                 name="subject"
                 value="{{ $msg->subject }}" />
          {!! $errors->first('subject', '<span class="formError">:message</span>') !!}
        </div>

        <div class="form-group">
          <label for="email">{{ trans('contact.fields.email') }}</label>
          <input id="email"
                 class="form-control"
                 type="text"
                 name="email"
                 value="{{ $msg->email }}" />
          {!! $errors->first('email', '<span class="formError">:message</span>') !!}
        </div>

        <div class="form-group">
          <label for="message">{{ trans('contact.fields.message') }}</label>
          <textarea id="message"
                    class="form-control"
                    name="message">{{ $msg->message }}</textarea>
          {!! $errors->first('message', '<span class="formError">:message</span>') !!}
        </div>

        <div class="form-group">
          <label for="registered">{{ trans('contact.fields.registered') }}</label>
          <input id="message"
                  class="form-control"
                  type="text"
                  name="registered"
                  value="{{ $msg->created_at }}" />
        </div>
      </div>

      {{-- Solo se permite enviar un formulario cada 2 minutos --}}
      <div id="sendEmail">
          <input class="btn btn-primary" type="submit" value="{{ trans('contact.fields.update') }}" />
      </div>
    </form>
@stop

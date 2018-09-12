{{--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
--}}

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', trans('titles.contact'))

{{-- Descripción --}}
@section('description', trans('contact.description'))

{{-- Palabras clave --}}
@section('keywords', trans('contact.keywords'))

{{-- Contenido de la sección --}}
@section('content')
  <h2>{{ trans('contact.title') }}</h2>
  <h3>{{ trans('contact.description') }}</h3>
  <form method="POST" action="{{ route('messages.store') }}">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
    {!! csrf_field() !!}

    <div>
      <div class="form-group">
        <label for="first_name">{{ trans('contact.fields.first_name') }}</label>
        <input id="first_name"
               class="form-control"
               type="text"
               name="first_name"
               value="{{ old('first_name') }}" />
        {!! $errors->first('first_name', '<span class="formError">:message</span>') !!}
      </div>

      <div class="form-group">
        <label for="last_name">{{ trans('contact.fields.last_name') }}</label>
        <input id="last_name"
               class="form-control"
               type="text"
               name="last_name"
               value="{{ old('last_name') }}" />
        {!! $errors->first('last_name', '<span class="formError">:message</span>') !!}
      </div>

      <div class="form-group">
        <label for="subject">{{ trans('contact.fields.subject') }}</label>
        <input id="subject"
               class="form-control"
               type="text"
               name="subject"
               value="{{ old('subject') }}" />
        {!! $errors->first('subject', '<span class="formError">:message</span>') !!}
      </div>

      <div class="form-group">
        <label for="email">{{ trans('contact.fields.email') }}</label>
        <input id="email"
               class="form-control"
               type="text"
               name="email"
               value="{{ old('email') }}" />
        {!! $errors->first('email', '<span class="formError">:message</span>') !!}
      </div>

      <div class="form-group">
        <label for="message">{{ trans('contact.fields.message') }}</label>
        <textarea id="message"
                  class="form-control"
                  name="message">{{ old('message') }}</textarea>
        {!! $errors->first('message', '<span class="formError">:message</span>') !!}
      </div>

      <div class="form-group">
        <label for="registered">{{ trans('contact.fields.registered') }}</label>
        <input id="message"
               class="form-control"
               type="text"
               name="registered"
               value="{{ date('Y-m-d H:i:s') }}" />
      </div>
    </div>

    {{-- Solo se permite enviar un formulario cada 2 minutos --}}
    <div id="sendEmail" class="form-group">
        @if( (int)Request::cookie('sendmail') === 1 )
            Se ha enviado un email hace menos de 2 minutos
            <br />
            <?php
                $send_at = (int)Request::cookie('sendmail_at');
                $unblock_at = $send_at + 120;
                $t_restante_mail = $unblock_at - (int)time();
            ?>
            Tiempo restante para enviar de nuevo: {{ $t_restante_mail }} segundos
            <br />
            <input class="btn btn-primary" type="submit" value="{{ trans('contact.fields.submit') }}" disabled />
        @else
            <input class="btn btn-primary" type="submit" value="{{ trans('contact.fields.submit') }}" />
        @endif
    </div>
  </form>
@stop

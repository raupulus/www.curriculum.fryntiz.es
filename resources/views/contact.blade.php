{{--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
--}}

@extends('layouts.template')

{{-- Título de la página --}}
@section('title', 'Contact')

{{-- Descripción --}}
@section('description', 'Contact')

{{-- Palabras clave --}}
@section('keywords', 'curriculum, curriculum online, Raúl Caro Pastorino, contact')

{{-- Contenido de la sección --}}
@section('content')
  <h2>{{ trans('contact.title') }}</h2>
  <form method="POST" action="{{ route('messages.store') }}">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
    {!! csrf_field() !!}

    <div>
      <div>
        <label for="first_name">{{ trans('contact.first_name') }}</label>
        <input id="first_name" type="text" name="first_name"
                              value="{{ old('first_name') }}" />
        {!! $errors->first('first_name', '<span class="formError">:message</span>') !!}
      </div>

      <div>
        <label for="last_name">{{ trans('contact.last_name') }}</label>
        <input id="last_name" type="text" name="last_name"
                               value="{{ old('last_name') }}" />
        {!! $errors->first('last_name', '<span class="formError">:message</span>') !!}
      </div>

      <div>
        <label for="subject">{{ trans('contact.subject') }}</label>
        <input id="subject" type="text" name="subject"
                            value="{{ old('subject') }}" />
        {!! $errors->first('subject', '<span class="formError">:message</span>') !!}
      </div>

      <div>
        <label for="email">{{ trans('contact.email') }}</label>
        <input id="email" type="text" name="email"
                          value="{{ old('email') }}" />
        {!! $errors->first('email', '<span class="formError">:message</span>') !!}
      </div>

      <div>
        <label for="message">{{ trans('contact.message') }}</label>
        <textarea id="message" name="message">{{ old('message') }}</textarea>
        {!! $errors->first('message', '<span class="formError">:message</span>') !!}
      </div>

      <div>
        <label for="registered">{{ trans('contact.registered') }}</label>
        <input id="message" type="text" name="registered" value="{{ date('Y-m-d H:i:s') }}" />
      </div>
    </div>

    {{-- Solo se permite enviar un formulario cada 2 minutos --}}
    <div id="sendEmail">
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
            <input class="btn btn-primary" type="submit" value="{{ trans('contact.submit') }}" disabled />
        @else
            <input class="btn btn-primary" type="submit" value="{{ trans('contact.submit') }}" />
        @endif
    </div>
  </form>
@stop

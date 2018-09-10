<!DOCTYPE html>
<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="Raúl Caro Pastorino" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
  </head>

  <body>
    <div id="boxinfo">
        Caja de información:
        <br />
    </div>

    <div id="boxheader">
        @include('layouts.header')
    </div>

    <div id="boxsidebar">
        @include('layouts.sidebar')
    </div>

    <div id="boxcontent">
        @if(Session::has('sucess_message'))
            {{ Session::get('sucess_message') }}
        @else
            @yield('content')
        @endif
    </div>

    <div id="boxfooter">
        @include('layouts.footer')
    </div>
  </body>
</html>

<!DOCTYPE html>
<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

<html lang="es">
@include('layouts.header')

  <body>
    <div id="generalbox" class="row">
        <div id="boxheader">
            @include('layouts.nav')
        </div>

        <div id="boxsidebar" class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
            @include('layouts.sidebar')
        </div>

        <div id="boxcontent" class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
            @if(Session::has('sucess_message'))
                {{ Session::get('sucess_message') }}
            @else
                @yield('content')
            @endif
        </div>

        <div id="boxfooter">
            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.footer-meta')

    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ mix('/js/scripts.js') }}"></script>
  </body>
</html>

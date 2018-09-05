<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->
<aside>
    Este es el sidebar
    <ul>

        <li><a href="{{ route('contact') }}">Contact index</a></li>

        @if (auth()->guest())
            <li><a href="{{ route('login') }}">Login</a></li>
        @elseif (auth()->check())
            <li>
                <a href="{{ route('messages.index') }}">
                    Messages index
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}">
                    Cerrar sesión de: {{ auth()->user()->name}}
                </a>
            </li>
        @endif
    </ul>
</aside>

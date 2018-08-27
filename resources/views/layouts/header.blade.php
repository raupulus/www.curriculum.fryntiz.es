<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->
<header>
    <h1>@yield('title')</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('objetive') }}">Objetive</a></li>
            <li><a href="{{ route('experience') }}">Experience</a></li>
            <li><a href="{{ route('education') }}">Education</a></li>
            <li><a href="{{ route('skills') }}">Skills</a></li>
        </ul>
    </nav>
</header>

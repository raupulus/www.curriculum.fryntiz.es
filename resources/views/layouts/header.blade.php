<!--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
-->

<style>
    .menuActive {
        font-weight: bold;
        color: red;
        background-color: yellow;
    }

    .menuInactive {
        font-weight: bold;
        color: green;
    }
</style>

<?php
    function activeMenu($url) {
        return request()->is($url) ? 'menuActive' : 'menuInactive';
    }
?>

<header>
    <h1>@yield('title')</h1>
    <nav>
        <ul>
            <li><a class="{{ activeMenu('/') }}"
                   href="{{ route('home') }}">Home</a></li>
            <li><a class="{{ activeMenu('objetive') }}"
                   href="{{ route('objetive') }}">Objetive</a></li>
            <li><a class="{{ activeMenu('experience') }}"
                   href="{{ route('experience') }}">Experience</a></li>
            <li><a class="{{ activeMenu('education') }}"
                   href="{{ route('education') }}">Education</a></li>
            <li><a class="{{ activeMenu('skills') }}"
                   href="{{ route('skills') }}">Skills</a></li>
        </ul>
    </nav>
</header>

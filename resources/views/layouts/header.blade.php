{{--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
--}}

<?php
    /**
     * Comprueba si la url recibida es la actual y devuelve la clase css que se
     * aplicará en cada situación.
     * @param  String $url Ruta URL a comparar.
     * @return String      Nombre de la clase que se aplicará.
     */
    function activeMenu($url):String
    {
        return request()->is($url) ? 'menuActive' : 'menuInactive';
    }

    /**
     * Comprueba si la url recibida es la actual y devuelve la clase css que se
     * aplicará en cada situación para el submenú.
     * @param  String $url Ruta URL a comparar.
     * @return String      Nombre de la clase que se aplicará.
     */
    function activeSubMenu($url):String
    {
        return request()->is($url) ? 'subMenuActive' : 'subMenuInactive';
    }


    /* Array con datos para cada entrada del menú */
    $datosLinks = [
        [   // Inicio
            'section' => trans('sections.home'),
            'url' => '/',
            'link' => route('home')
        ],
        [   // Objetivos
            'section' => trans('sections.objetive'),
            'url' => 'objetive',
            'link' => route('objetive')
        ],
        [   // Experiencia
            'section' => trans('sections.experience'),
            'url' => 'experience',
            'link' => route('experience')
        ],
        [   // Educación
            'section' => trans('sections.education'),
            'url' => 'education',
            'link' => route('education')
        ],
        [   // Habilidades
            'section' => trans('sections.skills'),
            'url' => 'skills',
            'link' => route('skills')
        ],
    ];

    // Idiomas
    $datalang = [
        [
            'id' => 'lang_spanish',
            'abb' => 'es',
            'img' => '/images/languages/es.png',
            'title' => 'Idioma Español',
            'alt' => 'Idioma Español'
        ],
        [
            'id' => 'lang_english',
            'abb' => 'en',
            'img' => '/images/languages/en.png',
            'title' => 'Language English',
            'alt' => 'Language English'
        ],
    ];
?>

<div id="boxheader" class="content-fluid">
    {{-- TopBar --}}
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button"
                    class="navbar-toggle"
                    data-toggle="collapse"
                    data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="https://fryntiz.es" target="_blank">
                            {{ trans('sections.portal') }}
                        </a>
                    </li>

                    <li class="{{ activeSubMenu('downloads') }}">
                        <a href="{{-- route('downloads') --}}">
                            {{ trans('sections.downloads') }}
                        </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-center boxlanguage">
                    @foreach ($datalang as $lang)
                        <li id="{{ $lang['id'] }}">
                            <img src="{{ asset($lang['img']) }}"
                                 title="{{ $lang['title'] }}"
                                 alt="{{ $lang['alt'] }}" />
                            {{ $lang['abb'] }}
                        </li>
                    @endforeach
                </ul>

                {{-- Menú a la Derecha --}}
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ activeSubMenu('contact') }}">
                        <a href="{{ route('contact') }}">
                            {{ trans('sections.contact') }}
                        </a>
                    </li>

                    @if (auth()->guest())
                        <li class="{{ activeSubMenu('login') }}">
                            <a href="{{ route('login') }}">
                                {{ trans('sections.login') }}
                            </a>
                        </li>
                        @elseif (auth()->check())
                        <li class="{{ activeSubMenu('messages*') }}">
                            <a href="{{ route('messages.index') }}">
                                {{ trans('sections.messages') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('logout') }}">
                                Cerrar sesión de: {{ auth()->user()->name}}
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>{{-- /TopBar --}}

    <header class="row">
        {{-- Caja con el título y logotipo --}}
        <div id="boxlogo" class="align-middle col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <figure id="logotipo" class="col-lg-4">
                <img src="{{ asset('/images/logotipo.png') }}"
                     alt="Logo"
                     title="Logo" />
            </figure>
            <h1 id="sitetitle" class="col-lg-8">@yield('title')</h1>
        </div>

        {{-- Botón que indica desplegable en pantallas pequeñas --}}
        <div id="btnMovil" class="col-lg-0 col-md-0 col-sm-0 col-xs-12">
          <span class="fa fa-bars"></span>
        </div>

        {{-- Enlaces de navegación --}}
        <nav class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <ul>
                @foreach ($datosLinks as $sectionlink)
                    <li class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <a class="{{ activeMenu($sectionlink['url']) }}"
                           href="{{ $sectionlink['link'] }}">
                            {{ $sectionlink['section'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
</div>

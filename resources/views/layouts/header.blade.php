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
    function activeMenu($url) {
        return request()->is($url) ? 'menuActive' : 'menuInactive';
    }

    /* Array con datos para cada entrada del menú */
    $datosLinks = [
        [
            'section' => trans('sections.home'),
            'url' => 'home',
            'link' => route('home')
        ],
        [
            'section' => trans('sections.objetive'),
            'url' => 'objetive',
            'link' => route('objetive')
        ],
        [
            'section' => trans('sections.experience'),
            'url' => 'experience',
            'link' => route('experience')
        ],
        [
            'section' => trans('sections.education'),
            'url' => 'education',
            'link' => route('education')
        ],
        [
            'section' => trans('sections.skills'),
            'url' => 'skills',
            'link' => route('skills')
        ],
    ]
?>

<div id="boxheader" class="content-fluid">
    <div id="topbar" class="row">
      <div class="boxlanguage">
        <section id="spanish" (click)="language('es')">
          <img src="/assets/img/aside/es.png" title="Idioma Español" alt="Idioma Español" />es
        </section>

        <section id="english" (click)="language('en')">
          <img src="/assets/img/aside/en.png" title="Idioma Inglés" alt="Idioma Inglés" />en
        </section>
      </div>
    </div>

    <header class="row">
        {{-- Caja con el título y logotipo --}}
        <div id="boxlogo" class="align-middle col-lg-5 col-md-12 col-sm-12 col-xs-12">
            <figure id="logotipo" class="col-lg-4">
                <img src="/img.jpg" alt="Logo" />
            </figure>
            <h1 id="sitetitle" class="col-lg-8">@yield('title')</h1>
        </div>

        {{-- Botón que indica desplegable en pantallas pequeñas --}}
        <div id="btnMovil" class="col-lg-0 col-md-0 col-sm-0 col-xs-12">
          <span class="fa fa-bars"></span>
        </div>

        <nav class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <ul>
                @foreach ($datosLinks as $sectionlink)
                    <li>
                        <a class="col-lg-2 col-md-2 col-sm-12 col-xs-12 {{ activeMenu($sectionlink['url']) }}"
                           href="{{ $sectionlink['link'] }}">
                            {{ $sectionlink['section'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </header>
</div>

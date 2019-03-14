{{--
@author Raúl Caro Pastorino
@copyright Copyright (c) 2018 Raúl Caro Pastorino
@license https://www.gnu.org/licenses/gpl-3.0-standalone.html

Author Web: https://fryntiz.es
E-mail: dev@fryntiz.es
--}}

<hr class="divider-d" />

<footer class="footer bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div id="footerautor">
                    Raúl Caro Pastorino
                </div>

                <div id="footertechnology">
                    Built with laravel
                </div>

                <p class="copyright font-alt">&copy; 2019 - {{ date('Y') }}
                    <a href="{{ route('home') }}">
                        Curriculum
                    </a>

                    <a href="https://fryntiz.es" target="_blank">
                        Raúl Caro Pastorino
                    </a>
                </p>
            </div>

            <div class="col-sm-6">
                <div class="footer-social-links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-telegram"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>

        <div id="footerlinks" class="row">
            <div class="flinks col-md-4">1</div>
            <div class="flinks col-md-4">2</div>
            <div class="flinks col-md-4">3</div>
        </div>
    </div>
</footer>

{{-- Botón para subir --}}
<div class="scroll-up">
    <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
</div>

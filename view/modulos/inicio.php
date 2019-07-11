<!-- Page-->
<div class="page text-center">
    <!-- Page Header-->
    <header class="page-header bg-image-01">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="158px" data-md-stick-up-offset="10px" data-lg-stick-up-offset="158px" class="rd-navbar rd-navbar-centered">
                <button data-rd-navbar-toggle=".rd-navbar-collapse" class="rd-navbar-collapse-toggle"><span></span></button>
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                        <div class="rd-navbar-contacts rd-navbar-collapse rd-navbar-collapse-2"><span>Póngase en contacto con nosotros</span>
                            <div><span class="icon fa-phone text-primary"></span><a>+56 9 5805 3609</a></div>
                        </div>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="inicio" class="brand-name"><img src="view/componentes/img/logo/logo_transparente.png" width="228" height="83" alt="Parcelas de chile"></a></div>
                        <!--RD Navbar Search-->
                        <div class="rd-navbar-search"><a data-rd-navbar-toggle=".rd-search" href="#" class="rd-navbar-search-toggle"><span class="fa-search"></span></a>
                            <form action="search-results.html" data-search-live="rd-search-results-live" method="GET" class="rd-search">
                                <div class="form-group">
                                    <ul class="list-inline">
                                        <li><a href="https://www.facebook.com/parcelasdechile/" target="_blank" class="icon icon-sm text-primary fa-facebook"></a></li>
                                        <li><a href="https://www.youtube.com/channel/UC1A2lJ21pRVisDtocb1gTTA/" target="_blank" class="icon icon-sm text-primary fa-youtube"></a></li>
                                        <li><a href="https://www.linkedin.com/company/parcelasdechile?originalSubdomain=cl/" target="_blank" class="icon icon-sm text-primary fa-linkedin"></a></li>
                                        <li><a href="https://instagram.com/parcelasdechile/" target="_blank" class="icon icon-sm text-primary fa-instagram"></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-nav-wrap">
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="active"><a href="inicio">Home</a></li>
                            <li><a href="#">Proyectos</a>
                                <!-- RD Navbar Dropdown-->
                                <ul class="rd-navbar-dropdown">
                                    <li><a href="lagochapo">Lago Chapo</a></li>
                                    <li><a href="parcelacionelvolantin">Parcelación El Volantín</a></li>
                                </ul>
                            </li>
                            <li><a href="quienessomos">Quienes Somos</a></li>
                            <!-- RD Navbar Dropdown-->
                            <li><a href="contacto">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="shell section-70 section-lg-120 text-md-left">
            <div class="range range-xs-middle">
                <!-- SLIDE HOME-->
                <div class="cell-lg-7 cell-md-6">
                    <!-- Owl Carousel-->
                    <div data-items="1" data-dots="true" data-margin="30" data-mouse-drag="false" class="context-dark owl-slider owl-carousel">
                        <div class="owl-item">
                            <hr class="divider veil reveal-md-inline-block">
                            <h1>Inscríbete en nuestra venta en verde</h1>
                            <p class="offset-top-25">Próximo proyecto "Parcelación El Volantín"</p>
                        </div>
                        <div class="owl-item">
                            <hr class="divider veil reveal-md-inline-block">
                            <h1>Invierte en tierra</h1>
                            <p class="offset-top-25">El valor de la tierra va en aumento con los años, esta es una oportunidad de invertir.</p>
                        </div>
                        <div class="owl-item">
                            <hr class="divider veil reveal-md-inline-block">
                            <h1>Bienvenidos a Parcelas de Chile</h1>
                            <p class="offset-top-25">Por qué tenemos el país más lindo del mundo, creemos que deberías elegir invertir con Parcelas de Chile.</p>
                        </div>
                    </div>
                </div>
                <!-- TE LLAMAMOS - RD Mailform-->
                <div class="cell-md-5 cell-lg-4 cell-md-preffix-1 offset-top-40 text-left">
                    <div class="well well-base">
                        <h3>¿Te llamamos?</h3>
                        <form action="view/componentes/bat/rd-mailform.php" data-form-output="form-output-global" data-form-type="inicio" method="POST" class="offset-top-30 text-left rd-mailform">
                            <div class="form-group">
                                <label class="form-label-static form-label-outside"></label>
                                <input type="text" id="contact-name" name="nombre" data-constraints="@Required" class="form-control" placeholder="Nombre Completo">
                            </div>
                            <div class="form-group">
                                <label class="form-label-static form-label-outside"></label>
                                <input type="email" id="contact-email" name="email" data-constraints="@Email @Required" class="form-control" placeholder="Correo Electrónico">
                            </div>
                            <div class="form-group">
                                <label class="form-label-static form-label-outside"></label>
                                <input type="text" id="contact-phone" name="numero" data-constraints="@Numeric @Required" class="form-control" placeholder="Teléfono">
                            </div>
                            <div class="offset-top-10">
                                <button type="submit" class="btn btn-block btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <main class="page-content">
        <!-- Nuestras Parcelas-->
        <section>
            <div class="shell section-100 section-lg-top-30 section-lg-bottom-30 context-light text-md-center">
                <h3>Nuestras Parcelas en venta</h3>
            </div>
        </section>
        <!-- Las Parcelas-->
        <section>
            <div class="range range-condensed text-sm-left">
                <div class="cell-sm-6">
                    <div class="reveal-block thumbnail-variant-1">
                        <div class="caption-wrapper">
                            <img src="view/componentes/img/proyectos/lago_chapo/lagochapo.jpg" width="960" height="567" alt="Lago chapo" class="img-responsive center-block">
                            <div class="caption"><a href="lagochapo" class="label label-primary">X Región</a></div>
                        </div>
                        <div class="caption-2">
                            <h2 class="context-dark ocultar">Inscríbete en nuestra <br>venta en verde</h2>
                            <br>
                            <h3>Desde: $ 9.990.000</h3>
                            <p>Últimas parcelas disponibles</p>
                            <h3 class="caption-title"><a href="lagochapo" class="text-white">Lago Chapo, Puerto Montt</a></h3><a href="lagochapo" class="btn btn-primary-variant-1">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 offset-top-0">
                    <div class="reveal-block thumbnail-variant-1">
                        <div class="caption-wrapper">
                            <img src="view/componentes/img/proyectos/mirador_alcones/malcones.jpg" width="960" height="567" alt="Volantin de la quebrada" class="img-responsive center-block">
                            <div class="caption"><a href="parcelacionelvolantin" class="label label-primary">VI Región</a></div>
                        </div>
                        <div class="caption-2">
                            <h2 class="context-dark">Inscríbete en nuestra <br>venta en verde</h2>
                            <br>
                            <h3>Desde $7.990.00</h3>
                            <p>Próximo lanzamiento</p>
                            <h3 class="caption-title"><a href="parcelacionelvolantin" class="text-white">Parcelación El Volantín</a></h3><a href="parcelacionelvolantin" class="btn btn-primary-variant-1">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Caracteristicas Parcelas-->
        <section id="proyectos">
            <div class="shell section-70 section-lg-45 text-md-left">
                <div class="range range-xs-around text-center">
                    <div class="cell-lg-4 cell-md-4"><span class="icon icon-lg icon-circle icon-primary fa-bookmark"></span>
                        <h5 class="offset-top-20">Rol Único</h5>
                        <p class="offset-top-10">Con el N° de Rol el SII identifica <br> a una propiedad o bien raíz. </p>
                    </div>
                    <div class="cell-lg-4 cell-md-4"><span class="icon icon-lg icon-circle icon-primary fa-bookmark"></span>
                        <h5 class="offset-top-20">Posibilidad luz y agua</h5>
                        <p class="offset-top-10">Parcelas posibilitadas para obtener <br> los recursos de luz y agua sin problemas.</p>
                    </div>
                    <div class="cell-lg-4 cell-md-4"><span class="icon icon-lg icon-circle icon-primary fa-bookmark"></span>
                        <h5 class="offset-top-20">Desde los 5000 Mt2</h5>
                        <p class="offset-top-10">Dependiendo del valor y el proyecto <br> los mts comienzan desde los 5000 mt2</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Parallax-->
        <section class="rd-parallax">
            <div data-speed="0.4" data-type="media" data-url="view/componentes/img/h1.jpg" class="rd-parallax-layer"></div>
            <div data-speed="0" data-type="html" class="rd-parallax-layer">
                <div class="shell section-100 section-lg-top-220 section-lg-bottom-205 context-dark text-md-left">
                    <hr class="divider">
                    <h2>Únete nuestro equipo de vendedores</h2>
                    <h4 class="offset-top-25">¿Tienes experiencia vendiendo terrenos ?<br class="veil reveal-md-block"></h4>
                    <a href="trabajaconnosotros" class="offset-top-50 btn btn-primary text-regular">Ver más</a>
                </div>
            </div>
        </section>
        <!-- NEWSLETTERS-->
        <section class="bg-primary section-45">
            <div class="shell text-lg-left context-dark">
                <div class="range range-xs-middle range-xs-center">
                    <div class="cell-lg-6">
                        <h4>Subscribete a nuestro newsletter</h4>
                    </div>
                    <div class="cell-sm-8 cell-lg-6 offset-top-20 offset-lg-top-0">
                        <!-- RD Mailform-->
                        <form data-form-output="form-output-global" data-form-type="subscribe" method="post" class="form-inline-custom-sm rd-mailform text-center">
                            <div class="form-group">
                                <label for="sub-email" class="form-label">Ingrese su mail</label>
                                <input id="sub-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                            </div>
                            <button class="btn btn-base-variant-1">Subscribirme</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Page Footer-->
    <footer class="page-footer">
        <div class="shell">
            <hr>
        </div>
        <!-- PRIVACITY-->
        <div class="shell section-30">
            <div class="range range-xs-middle">
                <div class="cell-sm-6 text-sm-right cell-sm-push-1">
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/parcelasdechile/" target="_blank" class="icon icon-sm text-primary fa-facebook"></a></li>
                        <li><a href="https://www.youtube.com/channel/UC1A2lJ21pRVisDtocb1gTTA/" target="_blank" class="icon icon-sm text-primary fa-youtube"></a></li>
                        <li><a href="https://www.linkedin.com/company/parcelasdechile?originalSubdomain=cl/" target="_blank" class="icon icon-sm text-primary fa-linkedin"></a></li>
                        <li><a href="https://instagram.com/parcelasdechile/" target="_blank" class="icon icon-sm text-primary fa-instagram"></a></li>
                    </ul>
                </div>
                <div class="cell-sm-6 text-sm-left offset-top-20 offset-sm-top-0">
                    <p class="small">Parcelas de Chile &#169;<span id="copyright-year"></span>.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Global Mailform Output-->
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
                    <button title="Share" class="pswp__button pswp__button--share"></button>
                    <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
                    <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
                <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__cent"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inicio Div chat -->
    <?php
    include "chat.php";
    ?>
    <!-- Fin Div chat -->
</div>

<!-- Global Mailform Output-->
<div id="form-output-global" class="snackbars"></div>
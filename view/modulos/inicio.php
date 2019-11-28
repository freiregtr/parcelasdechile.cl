<!-- Page-->
<div class="page text-center">
    <div class="rd-navbar-wrap">
        <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="150px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="150px" class="rd-navbar">
            <div class="rd-navbar-panel">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-inner">
                    <!-- RD Navbar Toggle-->
                    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a href="inicio" class="brand-name"><img src="view/componentes/img/logo/logon.png" height="85" alt="Parcelas de chile"></a>
                    </div>
                    <div class="rd-navbar-contacts rd-navbar-collapse rd-navbar-collapse-2"><span>Contáctanos</span>
                        <div><span class="icon1 fa-phone text-primary"></span><a href="callto:> +56958053609"></a><a>+56 9 4007 5222</a>
                        </div>
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
                               <li><a href="laconsentida">La Consentida</a></li>
                                <li><a href="parcelacionelvolantin">El Volantín</a></li>
                                <li><a href="lagochapo">Lago Chapo</a></li>
                            </ul>
                        </li>
                        <li><a href="quienessomos">Quienes Somos</a></li>
                        <li><a href="trabajaconnosotros">Trabaja con nosotros</a></li>
                        <li><a href="contacto">Contacto</a></li>
                        <li><a href="faq">FAQ</a></li>
                        <li><a href="blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- Page Header-->
    <header class="page-header">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="view/componentes/img/home1.mp4" type="video/mp4">
        </video>
        <!-- HOME-->
        <div class="shell section-70 section-lg-120 text-md-left">
            <div class="row row-xs-middle">
                <!-- SLIDE HOME-->
                <div class="col-lg-7 col-md-7">
                    <!-- Owl Carousel-->
                    <div data-items="1" data-dots="true" data-margin="30" data-mouse-drag="false" class="context-dark owl-slider owl-carousel">
                        <div class="owl-item">
                            <hr class="divider veil reveal-md-inline-block">
                            <h1>Parcelas de Chile <br>
                                <span class="familiar">Tu proyecto familiar</span></h1>
                            <br>
                            <p class="offset-top-35">Parcelas desde los $30.000.000, Un terreno es la mejor forma de asegurar el futuro de tu familia, parcelas en el Lago Chapo, Puerto Montt "Fundo La Consentida"</p>
                            <br>
                            <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/7X0FgJ6MsxM" data-target="#myModal">
                                ver video
                            </button>
                        </div>
                        <div class="owl-item">
                            <hr class="divider veil reveal-md-inline-block">
                            <h1>Parcelación <br> El Volantín</h1>
                            <br>
                            <p class="offset-top-35">Parcelas desde los $7.990.000, Un terreno es la mejor forma de asegurar el futuro de tu familia. A solo 138 km de Santiago y con buena conexión con otros destinos.</p>
                            <br>
                            <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/n0ORmVVdVqY" data-target="#myModal">
                                ver video
                            </button>
                        </div>
                        <div class="owl-item">
                            <hr class="divider veil reveal-md-inline-block">
                            <h1>Parcelación <br> Lago Chapo</h1>
                            <br>
                            <p class="offset-top-35">Parcelas desde los $7.990.000, Un terreno es la mejor forma de asegurar el futuro de tu familia. A solo 138 km de Santiago y con buena conexión con otros destinos.</p>
                            <br>
                            <button type="button" class="btn btn-primary video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/n0ORmVVdVqY" data-target="#myModal">
                                ver video
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<!-- Page Content-->
<main class="page-content">
    <section id="formulario">
        <div class="container-fluid">
            <div class="row">
                <div class="well well-base">
                    <div class="shell section-30 context-light text-md-center">
                        <h2>Inscríbete en nuestra venta privada</h2>
                    </div>
                    <br>
                    <form action="view/componentes/bat/rd-mailform.php" data-form-output="form-output-global" data-form-type="inicio" method="POST" class="offset-top-30 text-left rd-mailform">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label-static form-label-outside"></label>
                                    <input type="text" id="contact-name" name="nombre" data-constraints="@Required" class="form-control" placeholder="Nombre Completo">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label-static form-label-outside"></label>
                                    <input type="email" id="contact-email" name="email" data-constraints="@Email @Required" class="form-control" placeholder="Correo Electrónico">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label-static form-label-outside"></label>
                                    <input type="text" id="contact-phone" name="numero" data-constraints="@Numeric @Required" class="form-control" placeholder="Teléfono">
                                </div>
                            </div>
                            <br>
                            <div class="col-md-3">
                                <div class="offset-top-10">
                                    <button type="submit" class="btn btn-block btn-primary ">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- TITULO PARCELAS -->
    <br>
    <section>
        <div class="shell section-30 context-light text-md-center">
            <h2 class="offset-top-30 section-bottom-30">Nuestros Proyectos disponibles</h2>
        </div>
    </section>
    <!-- PROYECTOS-->
    <section id="sliderproyectos ">
        <div id="child-carousel" data-arrows="true" data-loop="true" data-dots="true" data-swipe="true" data-items="1" data-xs-items="1" data-sm-items="1" data-md-items="2" data-lg-items="2" data-slide-to-scroll="1" class="slick-slider slick-child ">
           
            <!-- LA CONSENTIDA-->
            <div class="item mov">
                <div class="reveal-block thumbnail-variant-1">
                    <div class="caption-wrapper">
                        <img src="view/componentes/img/proyectos/la_consentida/consentida2.jpg" width="960" height="567" alt="Volantin de la quebrada" class="img-responsive center-block">
                        <div class="caption shadow2"><a href="#" class="label label-primary">X Región</a></div>
                    </div>
                    <div class="caption-2">
                        <hr class="divider veil reveal-md-inline-block shadow2">
                        <h2 class="context-dark shadow1">La Consentida</h2>
                        <br>
                       <div class="precios">
                            <h3>VENTA EN VERDE</h3>
                       </div>
                        <p class="text-white shadow1 ">Región de los Lagos, Puerto Montt</p>
                        <a href="laconsentida" class="btn btn-primary-variant-1 ">Ver más</a>
                    </div>
                </div>
            </div>
             <!-- EL VOLANTIN-->
            <div class="item mov">
                <div class="reveal-block thumbnail-variant-1">
                    <div class="caption-wrapper">
                        <img src="view/componentes/img/proyectos/mirador_alcones/malcones.jpg" width="960" height="567" alt="Volantin de la quebrada" class="img-responsive center-block">
                        <div class="caption shadow2"><a href="#" class="label label-primary">VI Región</a></div>
                    </div>
                    <div class="caption-2">
                        <hr class="divider veil reveal-md-inline-block shadow2">
                        <h2 class="context-dark shadow1">El Volantín</h2>
                        <br>
                        <h3>Desde $ 7.990.000</h3>
                        <br>
                        <p class="text-white shadow1 ">Región de Libertador O’Higgins</p>
                        <a href="parcelacionelvolantin" class="btn btn-primary-variant-1">Ver más</a>
                    </div>
                </div>
            </div>
            <!-- LAGO CHAPO-->
            <div class="item mov">
                <div class="reveal-block thumbnail-variant-1">
                    <div class="caption-wrapper">
                        <img src="view/componentes/img/proyectos/lago_chapo/lagochapo.jpg" width="960" height="567" alt="Lago chapo" class="img-responsive center-block">
                        <div class="caption shadow2"><a href="#" class="label label-primary">X Región</a></div>
                    </div>
                    <div class="caption-2">
                        <hr class="divider veil reveal-md-inline-block shadow2">
                        <h2 class="context-dark shadow1">Lago Chapo</h2>
                        <br>
                        <h3>Totalmente vendido</h3>
                        <br>
                        <p class="text-white shadow1 ">Región de los Lagos, Puerto Montt</p>
                        <a href="lagochapo" class="btn btn-primary-variant-1">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- NEWSLETTERS-->
    <section class="bg-secundary section-45">
        <div class="shell text-lg-left context-light">
            <div class="range range-xs-middle range-xs-center">
                <div class="col-lg-6">
                    <h4>Subscribete a nuestro newsletter</h4>
                </div>
                <div class="col-sm-8 col-lg-6 offset-top-20 offset-lg-top-0">
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
    <!-- CARACTERISTICAS DE LAS PARCELAS-->
    <section id="proyectos">
        <div class="shell section-45 section-lg-45">

            <h2 class="offset-top-50 section-bottom-30 context-light text-center">Nuestras parcelas tienen</h2>

            <div class="range range-xs-around text-center">

                <div class="col-lg-4 col-md-4">
                    <span class="icon1 icon-lg icon-circle icon-primary fa-bookmark"></span>
                    <h5 class="offset-top-20">Rol Único</h5>
                    <br>
                    <p class="offset-top-10">Con el N° de Rol el SII identifica <br> a una propiedad o bien raíz. </p>
                    <br>
                </div>

                <div class="col-lg-4 col-md-4">
                    <span class="icon1 icon-lg icon-circle icon-primary fa-bookmark"></span>
                    <h5 class="offset-top-20">Posibilidad luz y agua</h5>
                    <br>
                    <p class="offset-top-10">Parcelas posibilitadas para obtener <br> los recursos de luz y agua sin problemas.</p>
                    <br>
                </div>

                <div class="col-lg-4 col-md-4">
                    <span class="icon1 icon-lg icon-circle icon-primary fa-bookmark"></span>
                    <h5 class="offset-top-20">Desde los 5000 Mt2</h5>
                    <br>
                    <p class="offset-top-10">Dependiendo del valor y el proyecto <br> los mts comienzan desde los 5000 mt2</p>
                    <br>
                </div>
            </div>     
        </div>
    </section>
    <section class="bg-blue">
        <div class="shell section-45 section-lg-45">
            <div class="container">
                <div class="row">
                    <h2 class="offset-top-50 section-bottom-30 context-light text-center">Experiencias de Clientes</h2>
                    <div class="range offset-top-30">
                        <div class="col-md-4">
                            <!-- Quote-->
                            <blockquote class="quote quote-variant-1">
                                <p><span class="text-sbold">Margarita Ramirez: </span> Yo me Compré una parcela en verde el año 2018 en $4.500.000 y después de un año la vendí en $27.000.000. De ahí en adelante aprendí sobre la rentabilidad de los terrenos en Chile.</p>
                                <div class="cite unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal unit-middle">
                                    <div class="unit-left"><img src="view/componentes/img/vendedores/margarita301.jpg" width="97" height="97" alt="" class="img-circle img-responsive center-block"></div>
                                    <div class="unit-body"><a href="#" class="text-bold text-base">Margarita Ramirez</a>
                                        <p class="offset-top-5 small text-primary">Supervisora de ventas</p>
                                    </div>
                                </div>
                            </blockquote>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <!-- Quote-->
                            <blockquote class="quote quote-variant-1">
                                <p><span class="text-sbold">Luna Huerta: </span>Compré una parcela en el Lago Chapo en venta en verde en enero a $9.990.000 y después de 6 meses la misma parcela, en la segunda etapa ya tenia un valor a publico de $18.990.000. ya estoy en la busqueda de mi segunda parcela.</p>
                                <div class="cite unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal unit-middle">
                                    <div class="unit-left"><img src="view/componentes/img/vendedores/luna301.jpg" width="97" height="97" alt="" class="img-circle img-responsive center-block"></div>
                                    <div class="unit-body"><a href="#" class="text-bold text-base">Luna Huerta</a>
                                        <p class="offset-top-5 small text-primary">Profesora de Yoga</p>
                                    </div>
                                </div>
                            </blockquote>
                            <br>
                        </div>
                        <div class="col-md-4">
                            <!-- Quote-->
                            <blockquote class="quote quote-variant-1">
                                <p><span class="text-sbold">Dusan Domancic:</span> Yo me compré una parcela en verde a $14.990.000 y hoy esa misma parcela en la segunda etapa tiene un valor de venta a publico de $25.990.000. Estoy arrepentido de no haber comprado otra altiro.</p>
                                <div class="cite unit unit-sm-horizontal unit-md-horizontal unit-lg-horizontal unit-middle">
                                    <div class="unit-left"><img src="view/componentes/img/vendedores/dusan301.jpg" width="97" height="97" alt="" class="img-circle img-responsive center-block"></div>
                                    <div class="unit-body"><a href="#" class="text-bold text-base">Dusan Domancic</a>
                                        <p class="offset-top-5 small text-primary">Ing. Civil</p>
                                    </div>
                                </div>
                            </blockquote>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PARALAX -->
    <section class="rd-parallax">
        <div data-speed="0.4" data-type="media" data-url="view/componentes/img/trabajaconnosotros.jpg" class="rd-parallax-layer"></div>
        <div data-speed="0" data-type="html" class="rd-parallax-layer">
            <div class="shell section-100 section-lg-top-220 section-lg-bottom-205 context-dark text-md-left">
                <hr class="divider">
                <h2 class="shadow1">Únete nuestro equipo de vendedores</h2>
                <br>
                <h4 class="offset-top-25 shadow1">¿Tienes experiencia vendiendo terrenos ?
                    <br class="veil reveal-md-block"></h4>
                <br>
                <br>
                <a href="trabajaconnosotros" class="offset-top-50 btn btn-primary text-regular shadow2">Ver más</a>
            </div>
        </div>
    </section>
</main>

<!-- FOOTER-->
<footer class="page-footer2">
    <div class="shell section-45 section-lg-30">
        <br>
        <h2 class="offset-top-50 section-bottom-30 context-light text-center">Empresas partner</h2>
        <hr>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/1.png" width="250" height="100" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/2.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/3.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/4.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/1.png" width="250" height="100" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/2.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/3.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/4.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/1.png" width="250" height="100" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/2.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/3.png" height="100" width="250" alt="" />
                </div>
                <div class="slide">
                    <img src="view/componentes/img/inversionistas/4.png" height="100" width="250" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="shell">
        <hr>
    </div>
    <!-- PRIVACITY-->
    <div class="shell section-30">
        <div class="range range-xs-middle">
            <div class="cell-sm-6 text-sm-right cell-sm-push-1">
                <!-- REDES SOCIALES-->
              <ul class="list-inline">
                    <li><a href="https://www.facebook.com/parcelasdechile/" target="_blank" class="icon1 icon-sm text-primary fa-facebook"></a></li>
                    <li><a href="https://www.youtube.com/channel/UC1A2lJ21pRVisDtocb1gTTA/" target="_blank" class="icon1 icon-sm text-primary fa-youtube"></a></li>
                    <li><a href="https://www.linkedin.com/company/parcelasdechile?originalSubdomain=cl/" target="_blank" class="icon1 icon-sm text-primary fa-linkedin"></a></li>
                    <li><a href="https://instagram.com/parcelasdechile/" target="_blank" class="icon1 icon-sm text-primary fa-instagram"></a></li>
                </ul>
            </div>
            <div class="cell-sm-6 text-sm-left offset-top-20 offset-sm-top-0">
                <p class="small">Parcelas de Chile &#169;<span id="copyright-year"></span>.
                </p>
            </div>
        </div>
    </div>
</footer>
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
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Global Mailform Output-->
<div id="form-output-global" class="snackbars"></div>
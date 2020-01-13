<!-- Page-->
<div class="page text-center">
    <!-- Page Header-->
    <header class="page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="150px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="150px" class="rd-navbar">
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-inner">
                        <!-- RD Navbar Toggle-->
                        <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand"><a href="inicio" class="brand-name"><img src="view/componentes/img/logo/logon.png" width="228" height="83" alt=""></a></div>
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
                            <li><a href="inicio">Home</a></li>
                            <li><a href="parcelacionelvolantin">Proyectos</a>
                                <!-- RD Navbar Dropdown-->
                                 <ul class="rd-navbar-dropdown">
                                <li><a href="lagochapo">Lago Chapo</a></li>
                                <li><a href="parcelacionelvolantin">El Volantín</a></li>

                            </ul>
                            </li>
                            <li><a href="quienessomos">Quienes Somos</a></li>
                            <!-- RD Navbar Dropdown-->
                            <li><a href="trabajaconnosotros">Trabaja con nosotros</a></li>
                            <li class="active"><a href="beneficiarios">Beneficiarios</a></li>
                            <li><a href="contacto">Contacto</a></li>
                            <li><a href="faq">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Page Content-->
    <main class="page-content">
        <section class="bg-gray-lighter">
            <div class="shell text-left">
                <ol class="breadcrumb">
                    <li><a href="inicio">Home</a></li>
                    <li class="active">Beneficiarios
                    </li>
                </ol>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="shell section-70 section-lg-45 text-md-left">
                        <h3>Beneficiarios</h3>
                        <p class="offset-top-16">Tenemos descuentos exclusivos para ti</p>
                        <section id="carabineros">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 offset-top-40">
                                        <div class="well">
                                            <h3>Carabineros de Chile</h3>
                                        </div>
                                        <div class="well well-dark">
                                            <p class="offset-tpo-10 offset-md-top-25 text-gray">Si te gustaría recibir ofertas exclusivas sobre nuestras parcelas, dejanos tu e-mail y nos pondremos en contacto </p>
                                            <!-- RD Mailform-->
                                            <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="offset-top-20 rd-mailform form-inline-custom">
                                                <div class="form-group">
                                                    <label for="subscribe-email" class="form-label">Enter<span class="veil reveal-lg-inline"> please your</span> e-mail
                                                    </label>
                                                    <input id="subscribe-email" type="email" name="email" data-constraints="@Required @Email" class="form-control form-control-white">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Enviar Oferta</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
                        <li> <a href="politicadeprivacidad" target="_blank" class="small text-primary"> Politica de privacida </a> </li>
                    </ul>
                </div>
                <div class="cell-sm-6 text-sm-left offset-top-20 offset-sm-top-0">
                    <p class="small">Parcelas de Chile &#169;<span id="copyright-year"></span>. <a href="privacy.html" class="text-gray">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Global Mailform Output-->
<div id="form-output-global" class="snackbars"></div>
<!-- Inicio Div chat -->
<?php
include "chat.php";
?>
<!-- Fin Div chat -->
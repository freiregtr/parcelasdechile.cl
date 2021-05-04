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
                    <div class="rd-navbar-brand"><a href="inicio" class="brand-name"><img src="view/componentes/img/logo/logon.png" height="85" alt=""></a></div>
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
                               
                               <li><a href="lasgolondrinas"><img src="view/componentes/images/iconos-menu/icono-menu-lasgolondrinas.svg" class="iconos-menu" width="70"> </img>Las Golondrinas</a></li>
                               
                                <li><a href="larosaconelclavel"><img src="view/componentes/images/iconos-menu/icono-menu-larosaconelclavel.svg" class="iconos-menu" width="70"> </img> La Rosa con El Clavel</a></li>

                            <li><a href="laconsentida"><img src="view/componentes/images/iconos-menu/icono-menu-laconsentida.svg" class="iconos-menu" width="70"> </img>La Consentida</a></li>
                                                                 
                            <li><a href="parcelacionelvolantin"><img src="view/componentes/images/iconos-menu/icono-menu-volantin.svg" class="iconos-menu" width="70"> </img> El Volantín</a></li>

                            <li><a href="lagochapo"><img src="view/componentes/images/iconos-menu/icono-menu-lagochapo.svg" class="iconos-menu" width="70"> </img>Lago Chapo</a></li>
                               

                            </ul>
                        </li>
                        <li><a href="quienessomos">Quienes Somos</a></li>
                        <li><a href="trabajaconnosotros">Trabaja con nosotros</a></li>
                        <li><a href="vendetucampo">Vende tu campo con nosotros </a></li>
                        <li><a href="contacto">Contacto</a></li>
                        <li><a href="faq">FAQ</a></li>
                        <li><a href="blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section class="bg-gray-lighter">
        <div class="shell text-left">
            <ol class="breadcrumb">
                <li><a href="inicio">Home</a></li>
        </ol>
        </div>
    </section>
    <!-- Page Content-->
    <main class="page-content">
       <div class="container-fluid">
            <section class="section-top-70 section-bottom-80">
                <div class="shell text-md-left">
                    <div class="row">
                        <div>
                            <div class="context-light">
                                <h2 class="offset-top-35 section-bottom-30 text-center">Vende tu campo con nostros </h2>
                            </div>
                            <hr>
                            <p class="offset-top-16 text-center">Déjanos toda la información sobre tu terreno y nos pondremos en contacto a la brevedad </p>
                            <!-- RD Mailform-->
                            <div class="container">
                                <div class="row">
                                    <div class="offset-md-2 col-md-2">

                                    </div>
                                    <div class="col-md-8">
                                        <form action="view/componentes/bat/rd-mailform.php" data-form-output="form-output-global" data-form-type="reserva online" method="post" class="offset-top-40 text-left rd-mailform">
                                            <div class="range range-xs-middle">
                                                <div class="cell-lg-2">
                                                    <p class="text-base">Nombre</p>
                                                </div>
                                                <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                                    <div class="form-group">
                                                        <label for="contact-name" class="form-label">Ingresa nombre</label>
                                                        <input id="contact-name" type="text" name="nombre" data-constraints="@Required" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="range range-xs-middle offset-top-20">
                                                <div class="cell-lg-2">
                                                    <p class="text-base">Mail</p>
                                                </div>
                                                <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                                    <div class="form-group">
                                                        <label for="contact-email" class="form-label">Ingresa tu e-mail</label>
                                                        <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="range range-xs-middle offset-top-20">
                                                <div class="cell-lg-2">
                                                    <p class="text-base">Teléfono</p>
                                                </div>
                                                <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                                    <div class="form-group">
                                                        <label for="contact-phone" class="form-label">Ingresa tu teléfono</label>
                                                        <input id="contact-phone" type="text" name="telefono" data-constraints="@Numeric @Required" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="range range-xs-middle offset-top-20">
                                                <div class="cell-lg-2">
                                                    <p class="text-base">De que tamaño es?</p>
                                                </div>
                                                <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                                    <div class="form-group">
                                                        <label for="contact-phone" class="form-label">Escribe la cantidad de hectareas </label>
                                                        <input id="contact-phone" type="text" name="s" data-constraints="@Numeric @Required" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="range range-xs-middle offset-top-20">
                                                <div class="cell-lg-2">
                                                    <p class="text-base">Donde esta ubicado?</p>
                                                </div>
                                                <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                                    <div class="form-group">
                                                        <label for="contact-name" class="form-label">Escribe región y la ciudad más cercana</label>
                                                        <input id="ubicacion" type="text" name="ubicacion" data-constraints="@Required" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="range range-xs-middle offset-top-20">
                                        <div class="cell-lg-2">
                                            <p class="text-base">Cuentanos un poco del campo</p>
                                        </div>
                                        <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                            <div class="form-group">
                                                <label for="contact-message" class="form-label">Si esta plano, si esta cerca de algun lago/rio/playa, tipo de suelo etc. </label>
                                                <textarea id="contact-message" name="mensaje" data-constraints="@Required" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

<!--<div class="range offset-top-20">
    <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                                    <div class="form-group">
                                            <select name="proyecto">
                                                <label for="proyecto" class="form-label">Elige el proyecto donde quiere reservar</label>
    <option value="LaConsentida">La Consentida (X región)</option>
      <option value="LaRefalosa">La Refalosa (X región)</option>
      <option value="LaRosaConElClavel">La Rosa con El Clavel (VI región)</option>
      <option value="ElVolantin">El Volantin (VI región)</option>
</select>
</div>
</div> -->



                                            <div class="range offset-top-20 text-center text-sm-left">
                                                <div class="cell-lg-5 cell-lg-preffix-2">
                                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Page Footer-->
    <footer class="page-footer2">
        <!-- PRIVACITY-->
        <div class="shell section-30">
            <div class="range range-xs-middle">
                <div class="cell-sm-6 text-sm-right cell-sm-push-1">
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/parcelasdechile/" target="_blank" class="icon1 icon-sm text-primary fa-facebook"></a></li>
                        <li><a href="https://www.youtube.com/channel/UC1A2lJ21pRVisDtocb1gTTA/" target="_blank" class="icon1 icon-sm text-primary fa-youtube"></a></li>
                        <li><a href="https://www.linkedin.com/company/parcelasdechile?originalSubdomain=cl/" target="_blank" class="icon1 icon-sm text-primary fa-linkedin"></a></li>
                        <li><a href="https://instagram.com/parcelasdechile/" target="_blank" class="icon1 icon-sm text-primary fa-instagram"></a></li>
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
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- Inicio Div chat -->
    <?php
include "chat.php";
?>
    <!-- Fin Div chat -->
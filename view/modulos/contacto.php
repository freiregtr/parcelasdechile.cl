<!DOCTYPE html>
<html lang="es" class="wide wow-animation">

<head>
    <!-- Site Title-->
    <title>Contacts</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="view/componentes/text/css" href="//fonts.googleapis.com/css?family=Poppins:400,700,300,400italic">
    <link rel="stylesheet" href="view/componentes/css/style.css">

    <!-- UA Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137903886-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-137903886-1');
    </script>

    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
</head>

<body>
    <!-- Page-->
    <div class="page text-center">
        <!-- Page Header-->
        <header class="page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="150px" data-md-stick-up-offset="1px" data-lg-stick-up-offset="150px" class="rd-navbar">
                    <button data-rd-navbar-toggle=".rd-navbar-collapse" class="rd-navbar-collapse-toggle"><span></span></button>
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Toggle-->
                            <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand"><a href="index.html" class="brand-name"><img src="view/componentes/img/logo/logo_transparente.png" width="228" height="83" alt=""></a></div>
                            <div class="rd-navbar-contacts rd-navbar-collapse rd-navbar-collapse-2"><span class="semi-small">Póngase
                                    en contacto con nosotros</span>
                                <div><span class="icon fa-phone text-primary"></span><a href="callto:>+56 9 5805 3609">+56 9 5805
                                        3609</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-nav-wrap">
                        <div class="rd-navbar-inner">
                            <!-- RD Navbar Nav-->
                            <ul class="rd-navbar-nav">
                                <li><a href="inicio.php">Home</a></li>
                                <li><a href="#">Proyectos</a>
                                    <!-- RD Navbar Dropdown-->
                                    <ul class="rd-navbar-dropdown">
                                        <li><a href="lagochapo.php">Lago Chapo</a></li>
                                        <li><a href="miradoralcones">Mirador Álcones</a></li>
                                    </ul>
                                </li>
                                <li><a href="quienessomos">Quienes Somos</a></li>
                                <!-- RD Navbar Dropdown-->
                                <li class="active"><a href="contacto">Contacto</a></li>
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
                        <li><a href="index1.html">Home</a></li>
                        <li class="active">Contacto
                        </li>
                    </ol>
                </div>
            </section>
            <section class="section-top-70 section-bottom-80">
                <div class="shell text-md-left">
                    <div class="range">
                        <div class="cell-md-8">
                            <h3>Contacto</h3>
                            <p class="offset-top-32 lead">
                                ¡Póngase en contacto con nosotros con respecto a su búsqueda de parcelas!</p>
                            <p class="offset-top-16">Por lo general, respondemos dentro de 1 día hábil ...</p>
                            <hr>
                            <h3>¿En qué podemos ayudarte?</h3>
                            <!-- RD Mailform-->
                            <form data-form-output="form-0output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="offset-top-40 rd-mailform text-left">
                                <div class="range range-xs-middle">
                                    <div class="cell-lg-2">
                                        <p class="text-base">Nombre Completo</p>
                                    </div>
                                    <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                        <div class="form-group">
                                            <label for="contact-name" class="form-label">Ingresa nombre</label>
                                            <input id="contact-name" type="text" name="name" data-constraints="@Required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="range range-xs-middle offset-top-20">
                                    <div class="cell-lg-2">
                                        <p class="text-base">E-mail</p>
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
                                            <input id="contact-phone" type="text" name="phone" data-constraints="@Numeric @Required" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="range offset-top-20">
                                    <div class="cell-lg-2 text-lg-nowrap">
                                        <p class="text-base">Mensaje</p>
                                    </div>
                                    <div class="cell-lg-10 offset-top-7 offset-lg-top-0">
                                        <div class="form-group">
                                            <label for="contact-message" class="form-label">¿Qué podemos ayudarte?</label>
                                            <textarea id="contact-message" name="message" data-constraints="@Required" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="range offset-top-20 text-center text-sm-left">
                                    <div class="cell-lg-5 cell-lg-preffix-2">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Page Footer-->
        <footer class="page-footer">
            <div class="shell section-70 section-lg-120">
                <div class="range text-md-left">
                    <div class="cell-md-4">
                        <h5>Sobre Nosotros</h5>
                        <p class="offset-top-20 offset-md-top-36">Por qué tenemos el país más lindo del mundo, creemos que deberías
                            elegir invertir con Parcelas de Chile.</p>
                    </div>
                    <div class="cell-md-4">
                        <h5>Sitios Relacionados</h5>
                        <div class="post-blog-sm offset-top-20 offset-md-top-36"><a href="blog-single-post.html" class="text-bold">www.agenciapanoramica.cl</a>
                            <p class="small offset-top-7">Tours Panorámicos</p>
                        </div>
                        <div class="post-blog-sm offset-top-16"><a href="blog-single-post.html" class="text-bold">www.lagochapo.cl</a>
                            <p class="small offset-top-7">Agencia de viajes</p>
                        </div>
                    </div>
                    <div class="cell-md-4">
                        <h5>Tags</h5>
                        <ul class="offset-top-20 offset-md-top-36 group">
                            <li><a href="blog.html" class="btn btn-tag">Parcelas</a></li>
                            <li><a href="blog.html" class="btn btn-tag">Chile</a></li>
                        </ul>
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
                        <ul class="list-inline">
                            <li><a href="https://www.facebook.com/parcelasdechile/" target="_blank" class="icon icon-sm text-primary fa-facebook"></a></li>
                            <li><a href="https://www.youtube.com/channel/UC1A2lJ21pRVisDtocb1gTTA" target="_blank" class="icon icon-sm text-primary fa-youtube"></a></li>
                            <li><a href="https://www.linkedin.com/company/parcelasdechile?originalSubdomain=cl" target="_blank" class="icon icon-sm text-primary fa-linkedin"></a></li>
                            <li><a href="https://instagram.com/parcelasdechile" target="_blank" class="icon icon-sm text-primary fa-instagram"></a></li>
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

    <!-- btn whatsapp -->
    <a href="https://api.whatsapp.com/send?phone=56958053609&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20parcelas." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- javascript -->
    <script src="view/componentes/js/core.min.js"></script>
    <script src="view/componentes/js/script.js"></script>
</body>

</html>
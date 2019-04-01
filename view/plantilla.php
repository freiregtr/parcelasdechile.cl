<?php
//___________________________________________________________________________________________________________   
// Inicialización de variable de sesión
session_start();
//___________________________________________________________________________________________________________
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing PAGE Html5 Template">
    <meta name="keywords" content="landing,startup,flat">
    <meta name="author" content="Made By JREYESP">

    <title>Parcelas de Chile - Tu proyecto familiar</title>

    <!-- // PLUGINS (css files) // -->
    <link href="view/componentes/js/plugins/bootsnav_files/skins/color.css" rel="stylesheet">
    <link href="view/componentes/js/plugins/bootsnav_files/css/animate.css" rel="stylesheet">
    <link href="view/componentes/js/plugins/bootsnav_files/css/bootsnav.css" rel="stylesheet">
    <link href="view/componentes/js/plugins/bootsnav_files/css/overwrite.css" rel="stylesheet">
    <link href="view/componentes/js/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    
    <link href="view/componentes/js/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    
    <link href="view/componentes/js/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    
    <link href="view/componentes/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">
    
    <!--// ICONS //-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">



    
    <!--// BOOTSTRAP & Main //-->
    
    <link href="view/componentes/bootstrap-3.3.7/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="view/componentes/css/main.css" rel="stylesheet">
    
</head>

<body>

    <!--======================================== 
           Preloader
    ========================================-->
    <div class="page-preloader">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
    <!--======================================== 
           Header
    ========================================-->

    <!--//** Navigation**//-->
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#brand">
                    <img src="view/imagenes/logo/logo_transparente.png" class="logo" alt="logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active scroll"><a href="#home">Home</a></li>
                    <li class="scroll"><a href="#proyectos">Proyectos</a></li>
                    <li class="scroll"><a href="#valores">Valores</a></li>
                    <li class="scroll"><a href="#clientes">Clientes</a></li>
                    <li class="scroll"><a href="#contacto">Contacto</a></li>
                    <li class="button-holder">
                        <button type="button" class="btn btn-blue navbar-btn" data-toggle="modal" data-target="#SignIn">Ingresar</button>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <!--//** Banner**//-->
    <section id="home">
        <div class="container">
            <div class="row">
                <!-- Introduction -->
                <div class="col-md-6 caption">
                    <h1>Bienvenidos a Parcelas de Chile</h1>
                    <h2>
                        <span class="animated-text"></span>
                        <span class="typed-cursor"></span>
                    </h2>
                    <p>Tenemos el privilegio de invitarte a disfrutar de un rincón natural único en nuestro país. 
                    </p>
                    <a href="#proyectos" class="btn btn-transparent">Ver Proyectos</a>
                    <a class="btn btn-blue popup-youtube" href="https://www.youtube.com/watch?v=Qp7LSJsmgAk">
                        <i class="material-icons">play_circle_filled</i>Ver video
                    </a>
                </div>
                <!-- Sign Up -->
                <div class="col-md-5 col-md-offset-1">
                    <form class="signup-form">
                        <h2 class="text-center">¿Te llamamos?</h2>
                        <hr>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre Completo" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Teléfono" required="required">
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-blue btn-block">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--======================================== 
           proyectos
    ========================================-->

    <section id="proyectos" class="section-padding">
        <div class="container">
            <h2>Nuestras parcelas</h2>
            <p>Estas son las característica generales de todas nuestras parcelas.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="far fa-sticky-note"></i>
                        <h4>Rol único</h4>
                        <p>Con el N° de Rol el SII identifica a una propiedad o bien raíz. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-tint"></i>
                        <h4>Factibilidad luz y agua</h4>
                        <p>Parcelas posibilitadas para obtener los recursos de luz y agua sin problemas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-ruler-combined"></i>
                        <h4>desde los 5000 Mt2</h4>
                        <p>Dependiendo del valor y el proyecto los mts comienzan desde los 5000 mt2</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================================== 
          Proyecto 1 - Lago Chapo
    ========================================-->

    <section id="proyecto1">
        <div class="container-fluid">
            <div class="row">
                <!-- Img -->
                <div class="col-md-6 proyecto1-bg">
                </div>
                <!-- Story Caption -->
                <div class="col-md-6">
                    <div class="proyecto1-content">
                        <h2>LAGO CHAPO</h2>
                        <p class="proyecto1-quote">
                            " Por qué tenemos el país más lindo del mundo, creemos que deberías elegir Parcelas de Chile."
                        </p>
                        <div class="proyecto1-text">
                            <p>Una de las maravillas que podemos encontrar en la zona del Lago Chapo es Disfrutar navegando con la hermosa vista del Volcán Calbuco, y si eres de las personas que ama la naturaleza deberías recorrer los senderos de la Reserva Nacional Llanquihue, una de las más lindas de Chile.</p>
                        </div>
                        <a href="#caracteristicas" class="btn btn-white">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--======================================== 
           Services
    ========================================-->

    <section id="caracteristicas" class="section-padding">
        <div class="container">
            <h2>Caracteristicas</h2>
            <p>Entretenciones, lugares turisticos y actividades de la zona.</p>
            <div class="row">

                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-fish"></i>
                        <h4>Deporte</h4>
                        <p>Practica de pesca deportiva, por la abundancia de la Trucha arcoíris.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="fas fa-leaf"></i>
                        <h4>Naturaleza</h4>
                        <p>Si amas la naturaleza deberías recorrer la Reserva Nacional Llanquihue.</p>


                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box">
                       <i class="fas fa-mountain"></i>
                        <h4>Paisajes</h4>
                        <p>Vista al Volcán Calbuco abrazada por el parque nacional Alerce Andino.</p>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--======================================== 
           tour 360
    ========================================-->

    <section id="360" class="section-padding">
        <div class="container text-center">
            <h2>Parcelas Lago Chapo</h2>
            <p>Navega en 360º por el proyecto y sus parcelas.</p>
            <br>
            <br>
        </div>

        <iframe src="https://lanube360.com/parcelas-chile" frameborder="0" width="100%" height="600px" scrolling="no" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true" oallowfullscreen="true" msallowfullscreen="true"></iframe>

    </section>

    <!--======================================== 
          Valores
    ========================================-->

    <section id="valores">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <br>
                    <br>
                    <h2>Valores y disponibilidad</h2>
                    <p>En el plano podrás ver graficada la disponibilidad de parcelas y sus diferentes valores dependiendo de su número.</p>
                    <hr>
                    <div class="feat-media">
                        <!-- Feature -->
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="material-icons">monetization_on</i>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">9.990.000.-</h4>
                                <p>Factibilidad luz y agua, 5000 mt2 y rol único</p>
                                <p> Disponibles: 6, 10,14, 15, 16, 19, 21, 25, 26, 27, 28 y 29</p>
                            </div>
                        </div>
                        <!-- Feature -->
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="material-icons">monetization_on</i>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">10.990.000</h4>
                                <p>Factibilidad luz y agua, 5000 mt2 y rol único</p>
                                <p> Disponibles: 41, 42, 43, 44 y 46</p>
                            </div>
                        </div>
                        <!-- Feature -->
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="material-icons">monetization_on</i>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">12.990.000</h4>
                                <p>Factibilidad luz y agua, 5000 mt2 y rol único</p>
                                <p> Disponibles: 1, 2, 34, 36, 37, 38 y 39</p>
                            </div>
                        </div>
                        <!-- Feature -->
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <i class="material-icons">monetization_on</i>
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">16.990.000</h4>
                                <p>Factibilidad luz y agua, 5000 mt2 y rol único</p>
                                <p> Disponibles: 48, 49, 51, 52, 53, 54, 55, 58, 59 y 60</p>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- Features Img -->
                <div class="col-md-6 col-md-push-1">
                    <br>
                    <br>
                    <br>
                    <br>
                    <img src="view/imagenes/plano.png" class="img-responsive" alt="feature">
                </div>
            </div>
        </div>
    </section>


    <!--======================================== 
         Precios
    ========================================-->

    <section id="price" class="section-padding">
        <div class="container">
            <h2>Valores</h2>
            <p>Los valores varian por la ubicación de la parcelacion dentro del proyecto.</p>
            <div class="row">
                <!-- Pricing Start Here -->
                <div class="pricing-container">
                    <div class="col-md-4">
                        <!--== SINGLE USER: Plan ==-->
                        <div class="plan">
                            <div class="pricing-header">
                                <h3>Lago Chapo</h3>

                                <h3>
                                    <span class="currency">$</span>

                                    <span class="amount">12.990.000</span>

                                </h3>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li><i class="material-icons">done</i><b>Rol único</b></li>
                                    <li><i class="material-icons">done</i><b>Factibilidad luz y agua</b></li>
                                    <li><i class="material-icons">done</i><b>5000 Mt2</b> </li>



                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="btn btn-blue">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--== MULTIPLE USER: Plan ==-->
                        <div class="plan active">
                            <div class="pricing-header">
                                <h3>Lago Chapo</h3>
                                <h4>desde</h4>

                                <h3>
                                    <span class="currency">$</span>

                                    <span class="amount">9.990.000</span>

                                </h3>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li><i class="material-icons">done</i><b>Rol único</b></li>
                                    <li><i class="material-icons">done</i><b>Factibilidad luz y agua</b></li>
                                    <li><i class="material-icons">done</i><b>5000 Mt2</b> </li>

                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="btn btn-blue">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--== Developer: Plan ==-->
                        <div class="plan">
                            <div class="pricing-header">
                                <h3>Lago Chapo</h3>

                                <h3>
                                    <span class="currency">$</span>

                                    <span class="amount">16.990.000</span>

                                </h3>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li><i class="material-icons">done</i><b>Rol único</b></li>
                                    <li><i class="material-icons">done</i><b>Factibilidad luz y agua</b></li>
                                    <li><i class="material-icons">done</i><b>5000 Mt2</b> </li>



                                </ul>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="btn btn-blue">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======================================== 
           Video
    ========================================-->

    <section id="valores">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Video Promocional</h2>
                    <p>Proyecto Lago Chapo, últimas parcelas disponibles.</p>
                    <br>
                   <div class="videoWrapper">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Qp7LSJsmgAk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                   </div>
                </div>
                <!-- Features Img -->

            </div>
        </div>
    </section>

    <!--======================================== 
           Clientes
    ========================================-->

    <section id="clientes" class="section-padding">
        <div class="container">
            <div class="row">
                <h2>Nuestros clientes</h2>
                <p>Clientes felices, cumpliendo su proyecto familiar.</p>
                <br>
                <br>
                <!--// Clients Images //-->
                <div class="clientes-images">
                    <div id="owl-clientes">
                        <div class="item"><img src="view/imagenes/clients/1.png" class="center-block" alt="client"></div>
                        <div class="item"><img src="view/imagenes/clients/2.png" class="center-block" alt="client"></div>
                        <div class="item"><img src="view/imagenes/clients/3.png" class="center-block" alt="client"></div>
                        <div class="item"><img src="view/imagenes/clients/4.png" class="center-block" alt="client"></div>

                    </div>
                </div>
                <!--// Clients Testimonials //-->
                <div id="owl-testimonios">
                    <div class="item">
                        <i class="material-icons">mood</i>
                        <p class="quote">Á mi me fascina vivir en una parcela, Lo recomiendo ha ojos cerrados,si a usted le gusta la tranquilidad escuchar el silencio ,NO ESPERE MÁS, SE LO RECOMIENDO AMIGO.
                        </p>
                        <h4>-Antonia Erba</h4>
                    </div>
                    <div class="item">
                        <i class="material-icons">mood</i>
                        <p class="quote">La tranquilidad de vida y el aire que se ve mas respirable, feliz con mi parcela.
                        </p>
                        <h4>-Ir Rodriguez</h4>
                    </div>
                    <div class="item">
                        <i class="material-icons">mood</i>
                        <p class="quote">Naturaleza pura, el lugar súper verde, el precio y el panorama espectacular.
                        </p>
                        <h4>-Mariluz Ojeda</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======================================== 
          perfil vendedores
    ========================================-->

    <section id="proyecto2">
        <div class="container-fluid">
            <div class="row">
               <div class="col-md-6">
                    <div class="proyecto2-content">
                        <h2>Únete nuestro equipo de vendedores</h2>
                        <br>
                        <div class="proyecto2-text">
                        <h4>  Tienes experiencia vendiendo terrenos ?</h4>
                        <br>

                        <p>Únete a nuestro equipo de vendedores.
                        Este 2019 saldremos con mas de 500 parcelas en distintas regiones y buscamos a los mejores !
                        </p>

                    
                        </div>
                    
                        
                        <button type="button" class="btn btn-white" data-toggle="modal" data-target="#login-overlay">Inscribir</button>
                    </div>
                </div>
                <!-- Img -->
                <div class="col-md-6 proyecto2-bg">
                </div>
                <!-- Story Caption -->
                
            </div>
        </div>
    </section>

    <!--======================================== 
           Contact
    ========================================-->

    <section id="contacto" class="section-padding">
        <div class="container">
            <h2>Contactanos</h2>
            <p>Tenemos un equipo de vendedores dispuestos a resolver todas tus dudad</p>

        </div>
        <!-- Contact Info -->
        <div class="container contacto-info">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="material-icons">place</i>
                        <h4>Dirección</h4>
                        <p>Américo Vespucio #1854 dpto 26, <br>Las Condes </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="material-icons">phone</i>
                        <h4>Teléfono</h4>
                        <p>+56 9 5805 3609</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box">
                        <i class="material-icons">email</i>
                        <h4>Correo</h4>
                        <p>Contacto@parcelasdechile.cl</p>
                        <p>Ventas@parcelasdechile.cl</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Map -->
        <!-- Contact Form -->
        <div class="contacto-forms">
            <div class="container">
               <br>
               <br>
               <br>
                <h2>Contacto</h2>
                <form class="contacto-form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre Completo" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required="required">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-blue">Enviar</button>
                </form>
            </div>
        </div>
    </section>


    <!--======================================== 
           Footer
    ========================================-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-caption">
                    <img src="view/imagenes/logo/logo_transparente.png" class="img-responsive center-block" alt="logo">
                    <hr>
                    <h5 class="pull-left">PARCElAS DE CHILE &copy; 2019 All rights reserved</h5>
                    <ul class="liste-unstyled pull-right">
                        <li><a href="https://www.facebook.com/pg/parcelasdechile/reviews/?ref=page_internal" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC1A2lJ21pRVisDtocb1gTTA?view_as=subscriber" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/18903356/admin/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/parcelasdechile/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!--======================================== 
           Modal
    ========================================-->

    <!-- Modal -->
    <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel">Ingreso vendedores</h4>

                </div>
                <div class="modal-body">
                    <form class="signup-form">
                        <div class="form-group">
                            <input type="text" class="form-control error" placeholder="Nombre de usuario" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control error" placeholder="Contraseña" required="required">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-blue btn-block">Entrar</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <a href="#">Olvide la contraseña/</a>
                    <a href="#">Crear cuenta</a>
                </div>
            </div>
        </div>
    </div>
    
    
     <div class="container">
         <div id="login-overlay" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">× cerrar</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title text-center" id="myModalLabel">PARCELAS DE CHILE</h4>
          </div>
          
          
          
          <div class="modal-body">
              <div class="container">
                 <div class="row">
                     <div class="col-md-6 content-center">
                      <p class="lead">Registro postulantes</p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> Flexibilidad horaria</li>
                          <li><span class="fa fa-check text-success"></span> Bonos por metas</li>
                          <li><span class="fa fa-check text-success"></span> Comisión por venta</li>
                          <li><span class="fa fa-check text-success"></span> Perfil vendedor</li>
                      </ul>
                  </div>
                          <div class="col-md-6 content-center">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/register/" novalidate="novalidate">
                             
                              <div class="form-group">
                                  <label for="name" class="control-label error">Nombres y apellidos</label>
                                  <input type="text" class="form-control" id="name" name="name" value="" required="" title="Please enter you name" placeholder="Juan Pérez">
                                  <span class="help-block"></span>
                              </div>
                              
                              <div class="form-group">
                                  <label for="mail" class="control-label">Correo Electrónico</label>
                                  <input type="text" class="form-control error" id="mail" name="mail" value="" required="@" title="Please enter you email" placeholder="juanperez@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              
                                <div class="form-group">
                                  <label for="phone" class="control-label">Teléfono</label>
                                  <input type="text" class="form-control error" id="phone" name="phone" value="" required="" title="Please enter you phone" placeholder="912345678">
                                  <span class="help-block"></span>
                              </div>
                              
                               <div class="form-group">
                                  <label for="password" class="control-label">Comentario</label>
                                   <textarea class="form-control" placeholder="Escribenos tu experiencia" required>
                                        </textarea>
                                  <span class="help-block"></span>
                              </div>
                              
                              <div id="loginErrorMsg" class="alert alert-error hide">Error en los datos ingresados</div>
                              
                              <button type="submit" class="btn btn-success btn-block">Enviar</button>
                          </form>
                      </div>
                  </div>
                 
           
              </div>
              </div>
          </div>
      </div>
  </div>
     </div>
   
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   
   
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="view/componentes/bootstrap-3.3.7/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="view/componentes/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="view/componentes/js/plugins/bootsnav_files/js/bootsnav.js"></script>
    <script src="view/componentes/js/plugins/typed.js-master/typed.js-master/dist/typed.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="view/componentes/js/plugins/Magnific-Popup-master/Magnific-Popup-master/dist/jquery.magnific-popup.js"></script>
    <script src="view/componentes/js/main.js"></script>
</body>

</html> 
<!DOCTYPE html>
<html lang="es" class="wide smoothscroll wow-animation">
<head>
    <title>Parcelas de Chile</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <!-- Favicon -->
    <link rel="icon" href="zimages/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="view/componentes/css/font-awesome.min.css">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="view/componentes/css/normalize.css">
    <!-- CSS Plugin Contacto -->
    <link rel="stylesheet" href="view/componentes/css/soch.css">
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
    <!-- Fin UA Analytics -->

    <!-- Stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view/componentes/css/style.css">
    
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
</head>
<body>
    <!-- carga de módulos -->
    <?php
    if(isset($_GET["ruta"])){
        if($_GET["ruta"] == "inicio"         ||
        $_GET["ruta"] == "lagochapo"      ||
        $_GET["ruta"] == "miradoralcones" ||
        $_GET["ruta"] == "contacto"        )
        {
            include "modulos/".$_GET["ruta"].".php"; // se concatena la variable
        }else{
            include "modulos/404.php";
        }
    }else{
        include "modulos/inicio.php";
    }
    ?>
    <!-- fin carda de módulos -->

    <!-- javascript -->
    <script src="view/componentes/js/core.min.js"></script>
    <script src="view/componentes/js/script.js"></script>
    <!-- Jquery Js -->
    <!-- <script src="assets/js/jquery.min.js"></script> -->
    <!-- Skype Chat Js -->
    <script src="view/componentes/plugin-chat/skypeChat.js"></script>
    <!-- Whatsapp Chat Js -->
    <script src="view/componentes/plugin-chat/whatsappChat.js"></script>
    <!-- Messenger Chat Js -->
    <script src="view/componentes/plugin-chat/messengerChat.js"></script>
    <!-- Main Js -->
    <script src="view/componentes/plugin-chat/main.js"></script>
</body>

</html>


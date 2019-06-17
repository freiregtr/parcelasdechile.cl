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
    <link href="view/componentes/mapsvg/css/mapsvg.css" rel="stylesheet">
    <link href="view/componentes/mapsvg/css/nanoscroller.css" rel="stylesheet">
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
            <!-- Prueba MAPSVG -->



    <script src="view/componentes/mapsvg/js/jquery.mousewheel.min.js"></script>
    <script src="view/componentes/mapsvg/js/jquery.nanoscroller.min.js"></script>

    <script src="view/componentes/mapsvg/js/mapsvg.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery("#mapsvg").mapSvg({width: 705.14,height: 732.22,colors: {baseDefault: "#000000",background: "#eeeeee",selected: 40,hover: 20,directory: "#fafafa",status: {},stroke: "FFF"},regions: {'P-2': {id: "P-2",'id_no_spaces': "P-2",fill: "rgba(192,46,56,1)",tooltip: "$ 12.990.000",data: {}},'P-3': {id: "P-3",'id_no_spaces': "P-3",fill: "rgba(192,46,56,1)",tooltip: "$ 12.990.000",data: {}},'P-58': {id: "P-58",'id_no_spaces': "P-58",fill: "rgba(83,147,67,1)",tooltip: "$ 16.990.000",data: {}},'P-59': {id: "P-59",'id_no_spaces': "P-59",fill: "rgba(83,147,67,1)",tooltip: "$ 16.990.000",data: {}},'P-55': {id: "P-55",'id_no_spaces': "P-55",fill: "rgba(83,147,67,1)",tooltip: "$ 16.990.000",data: {}},'P-51': {id: "P-51",'id_no_spaces': "P-51",fill: "rgba(83,147,67,1)",tooltip: "$ 16.990.000",data: {}},'P-48': {id: "P-48",'id_no_spaces': "P-48",fill: "rgba(83,147,67,1)",tooltip: "$ 16.990.000",data: {}},'P-46': {id: "P-46",'id_no_spaces': "P-46",fill: "rgba(48,85,147,1)",tooltip: "$ 10.990.000",data: {}},'P-44': {id: "P-44",'id_no_spaces': "P-44",fill: "rgba(48,85,147,1)",tooltip: "$ 10.990.000",data: {}},'P-17': {id: "P-17",'id_no_spaces': "P-17",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-18': {id: "P-18",'id_no_spaces': "P-18",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-19': {id: "P-19",'id_no_spaces': "P-19",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-20': {id: "P-20",'id_no_spaces': "P-20",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-21': {id: "P-21",'id_no_spaces': "P-21",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-47': {id: "P-47",'id_no_spaces': "P-47",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-49': {id: "P-49",'id_no_spaces': "P-49",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-50': {id: "P-50",'id_no_spaces': "P-50",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-52': {id: "P-52",'id_no_spaces': "P-52",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-53': {id: "P-53",'id_no_spaces': "P-53",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-54': {id: "P-54",'id_no_spaces': "P-54",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-56': {id: "P-56",'id_no_spaces': "P-56",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-57': {id: "P-57",'id_no_spaces': "P-57",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-60': {id: "P-60",'id_no_spaces': "P-60",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-61': {id: "P-61",'id_no_spaces': "P-61",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-62': {id: "P-62",'id_no_spaces': "P-62",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-39': {id: "P-39",'id_no_spaces': "P-39",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-38': {id: "P-38",'id_no_spaces': "P-38",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-37': {id: "P-37",'id_no_spaces': "P-37",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-36': {id: "P-36",'id_no_spaces': "P-36",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-35': {id: "P-35",'id_no_spaces': "P-35",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-34': {id: "P-34",'id_no_spaces': "P-34",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-33': {id: "P-33",'id_no_spaces': "P-33",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-1': {id: "P-1",'id_no_spaces': "P-1",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-4': {id: "P-4",'id_no_spaces': "P-4",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-5': {id: "P-5",'id_no_spaces': "P-5",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-32': {id: "P-32",'id_no_spaces': "P-32",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-6': {id: "P-6",'id_no_spaces': "P-6",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-40': {id: "P-40",'id_no_spaces': "P-40",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-31': {id: "P-31",'id_no_spaces': "P-31",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-7': {id: "P-7",'id_no_spaces': "P-7",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-41': {id: "P-41",'id_no_spaces': "P-41",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-42': {id: "P-42",'id_no_spaces': "P-42",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-43': {id: "P-43",'id_no_spaces': "P-43",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-45': {id: "P-45",'id_no_spaces': "P-45",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-22': {id: "P-22",'id_no_spaces': "P-22",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-16': {id: "P-16",'id_no_spaces': "P-16",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-23': {id: "P-23",'id_no_spaces': "P-23",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-24': {id: "P-24",'id_no_spaces': "P-24",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-25': {id: "P-25",'id_no_spaces': "P-25",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-26': {id: "P-26",'id_no_spaces': "P-26",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-27': {id: "P-27",'id_no_spaces': "P-27",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-28': {id: "P-28",'id_no_spaces': "P-28",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-29': {id: "P-29",'id_no_spaces': "P-29",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-30': {id: "P-30",'id_no_spaces': "P-30",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-8': {id: "P-8",'id_no_spaces': "P-8",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-9': {id: "P-9",'id_no_spaces': "P-9",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-10': {id: "P-10",'id_no_spaces': "P-10",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-11': {id: "P-11",'id_no_spaces': "P-11",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-12': {id: "P-12",'id_no_spaces': "P-12",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-13': {id: "P-13",'id_no_spaces': "P-13",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-14': {id: "P-14",'id_no_spaces': "P-14",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}},'P-15': {id: "P-15",'id_no_spaces': "P-15",fill: "rgba(88,89,89,1)",tooltip: "VENDIDA",data: {}}},viewBox: [0,0,705.14,732.22],cursor: "pointer",gauge: {on: false,labels: {low: "low",high: "high"},colors: {lowRGB: {r: 85,g: 0,b: 0,a: 1},highRGB: {r: 238,g: 0,b: 0,a: 1},low: "#550000",high: "#ee0000",diffRGB: {r: 153,g: 0,b: 0,a: 0}},min: 0,max: false},source: "/view/componentes/mapsvg/maps/user-uploads/Lago_Chapo.svg",title: "Lago_Chapo",responsive: true});
    });
    </script>
</body>

</html>


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
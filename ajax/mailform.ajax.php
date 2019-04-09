<?php

class AjaxMailform{
    public function respuesta()    {
        if(isset($_POST["nombre"]) && isset($_POST['correo']) && isset($_POST["telefono"]) && isset($_POST['mensaje'])){

            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $telefono = $_POST["telefono"];
            $mensaje = $_POST['mensaje'];

            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

            $telefono = filter_var($telefono, FILTER_SANITIZE_STRING);
            
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripslashes($mensaje);

            $enviar_a = 'mailleads@parcelasdechile.cl';
            $asunto = '[Nuevo LEAD] enviado desde parcelasdechile.cl';
            $mensaje = "De: $nombre \n";
            $mensaje.= "Correo: $correo \n";
            $mensaje.= 'Mensaje: ' . $_POST['mensaje'];

            mail($enviar_a, $asunto, $mensaje);
            
            /*try {
                mail($enviar_a, $asunto, $mensaje);
            } catch (Exception $e) {
                echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            } finally {
                return $enviado = $e;
            }*/

            $enviado = 'true';
        }else{
            $enviado = 'false';
        }

        echo json_encode($enviado);
    }
}

//___________________________________________________________________________________________________________
// recibir datos para mostrar lista de clientes de una empresa especifica
if(isset($_POST["nombre"]) ){
    $anadirCliente = new AjaxMailform();
    $anadirCliente -> respuesta();
}



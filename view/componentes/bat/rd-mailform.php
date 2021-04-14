<?php

$recipients = 'daria.pankova@parcelasdechile.cl';

try {
    require 'phpmailer/PHPMailerAutoload.php';

    preg_match_all("/([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/", $recipients, $addresses, PREG_OFFSET_CAPTURE);

    if (!count($addresses[0])) {
        die('MF001'); 
    }

    if (preg_match('/^(127\.|192\.168\.)/', $_SERVER['REMOTE_ADDR'])) {
        die('MF002');
    }

    $template = file_get_contents('rd-mailform.tpl');

    if (isset($_POST['form-type'])) {
        switch ($_POST['form-type']) {
            case 'ventaverde':
                $subject = 'Correo de venta en verde Parcelación Volantin';
                break;
            case 'inicio':
                $subject = 'Correo del formulario de contacto en Inicio';
                break;
            case 'empleo':
                $subject = 'Correo de postulación a empleo';
                break;
            case 'subscribe':
                $subject = 'Suscripcion';
                break;
            case 'order':
                $subject = 'Order request';
                break;
            case 'contacto':
                $subject = 'Un mensaje del formulario de contacto';
                break;
            case 'reserva online':
                $subject = 'Un mensaje del formulario de la reserva';
                break;
            default:
                $subject = 'A message from your site visitor';
                break;
        }
    } else {
        die('MF004');
    }

    if (isset($_POST['email'])) {
        $template = str_replace(
            array("<!-- #{FromState} -->", "<!-- #{FromEmail} -->"),
            array("Email:", $_POST['email']),
            $template
        );
    } else {
        die('MF003');
    }

    if (isset($_POST['mensaje'])) {
        $template = str_replace(
            array("<!-- #{MessageState} -->", "<!-- #{MessageDescription} -->"),
            array("Mensaje:", $_POST['mensaje']),
            $template
        );
    }

    preg_match("/(<!-- #{BeginInfo} -->)(.|\n)+(<!-- #{EndInfo} -->)/", $template, $tmp, PREG_OFFSET_CAPTURE);
    foreach ($_POST as $key => $value) {
        if ($key != "email" && $key != "mensaje" && $key != "form-type" && $key != "g-recaptcha-response" && !empty($value)) {
            $info = str_replace(
                array("<!-- #{BeginInfo} -->", "<!-- #{InfoState} -->", "<!-- #{InfoDescription} -->"),
                array("", ucfirst($key) . ':', $value),
                $tmp[0][0]
            );

            $template = str_replace("<!-- #{EndInfo} -->", $info, $template);
        }
    }

    $template = str_replace(
        array("<!-- #{Subject} -->", "<!-- #{SiteName} -->"),
        array($subject, $_SERVER['SERVER_NAME']),
        $template
    );

    $mail = new PHPMailer();
    $mail->From = $_POST['email'];

    # Attach file
    if (
        isset($_FILES['file']) &&
        $_FILES['file']['error'] == UPLOAD_ERR_OK
    ) {
        $mail->AddAttachment(
            $_FILES['file']['tmp_name'],
            $_FILES['file']['name']
        );
    }

    if (isset($_POST['nombre'])) {
        $mail->FromName = $_POST['nombre'];
    } else {
        $mail->FromName = "Visitante Parcelas de Chile";
    }

    foreach ($addresses[0] as $key => $value) {
        $mail->addAddress($value[0]);
    }

    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Port       = 587;

    $mail->SMTPSecure = "tls";

    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "info@parcelasdechile.cl";
    $mail->Password   = "egcbplebunwjusqw";
    $mail->From       = "info@parcelasdechile.cl";
    $mail->FromName   = "Parcelas Chile";

    $mail->CharSet = 'utf-8';
    $mail->Subject = $subject;
    $mail->MsgHTML($template);
    $mail->send();



    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
}

?>
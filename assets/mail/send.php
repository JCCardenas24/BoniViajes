<?php

//librerias
require '../PHPMailer-5.2-stable/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
// $mail->IsSMTP();

//Configuracion servidor mail
$mail->From = ("juancarlos.cardenas@aesir.com.mx"); //remitente
$mail->FromName = "Soporte Boniviajes";
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 465; //puerto
$mail->Username ='juancarlos.cardenas@aesir.com.mx'; //nombre usuario
$mail->Password = 'Escomipn2408.'; //contraseña
 
//Agregar destinatario
$mail->AddAddress("juancarlos.cardenas@aesir.com.mx");
$mail->Subject = "Solicitud Boniviajes.com";
$mail->Body = ('El usuario '.$_POST['nCompleto'].' ha solicitado información para el destino '.$_POST['destino'].' sus datos son: '.$_POST['phone1'].', '.$_POST['correo']);

//Avisar si fue enviado o no y dirigir al index
if ($mail->Send()) {
    echo'<script type="text/javascript">
           window.location.href = "/"
        </script>';
} else {
    echo'<script type="text/javascript">
            alert("No enviado Correctamente");
        </script>';
}
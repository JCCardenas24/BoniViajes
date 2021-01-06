<?php

//librerias
require '../PHPMailer-5.2-stable/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
// $mail->IsSMTP();

//Configuracion servidor mail
$mail->From = ("boniviajes.redes@gmail.com"); //remitente
$mail->FromName = "Soporte Boniviajes";
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; //seguridad
$mail->Host = "smtp.gmail.com"; // servidor smtp
$mail->Port = 465; //puerto
$mail->Username ='boniviajes.redes@gmail.com'; //nombre usuario
$mail->Password = 'Boniredes2020'; //contraseña
//Agregar destinatario
$mail->AddAddress("boniviajes.redes@gmail.com");
$mail->Subject = "Solicitud Boniviajes.com";
$mail->Body = ('El usuario'.$_POST['nCompleto'].' ha solicitado información para el destino '.$_POST['destino'].' sus datos son: '.$_POST['phone1'].', '.$_POST['correo']);

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

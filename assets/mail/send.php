<?php

//librerias
require '../PHPMailer-5.2-stable/PHPMailerAutoload.php';
require 'Medoo.php';

use Medoo\Medoo;

$database = new Medoo([
  'database_type' => 'mysql',
  'database_name' => 'boniviajes',
  'server' => '107.180.12.35',
  'username' => 'boniviajes',
  'password' => 'qzAsPsbEsGA95e2'
]);

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
  // Salvamos la información en la base de datos  
  $post = $_POST;

  $database->insert('web', [
    'nombre' => $post['nCompleto'],
    'email' => $post['correo'],
    'telefono' => $post['phone1'],
    'destino' => $post['destino']
  ]);

    echo'<script type="text/javascript">
           window.location.href = "/"
        </script>';
} else {
    echo'<script type="text/javascript">
            alert("No enviado Correctamente");
        </script>';
}

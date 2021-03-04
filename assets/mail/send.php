<?php

//librerias
require '../PHPMailer-5.2-stable/PHPMailerAutoload.php';
require 'Medoo.php';
require 'Hubspot.php';

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

// Variable amigable n_n
$post = $_POST;

// Registro en la base de datos
$database->insert('web', [
  'nombre' => $post['nCompleto'],
  'email' => $post['correo'],
  'telefono' => $post['phone1'],
  'destino' => $post['destino'],
  'check_in' => @$post['daterange'],
  'adultos' => @$post['input_adults_number'],
  'ninos' => @$post['input_kids_number']
]);

// Registro en Hubspot
$arr = array(
    'properties' => array(
        array(
            'property' => 'firstname',
            'value' => $post['nCompleto']
        ),
        array(
            'property' => 'email',
            'value' => $post['correo']
        ),
        array(
          'property' => 'phone',
          'value' => $post['phone1']
        ),
        array(
            'property' => 'message',
            'value' => $post['destino']
        ),
        array(
          'property' => 'check_in___check_out',
          'value' => $post['daterange']
        ),
        array(
            'property' => 'numero_de_adultos',
            'value' => @$post['input_adults_number']
        ),
        array(
            'property' => 'numero_de_ninos',
            'value' =>  @$post['input_kids_number']
        )
    )
);

hubspot($arr);

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

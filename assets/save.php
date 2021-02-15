<?php

//librerias
require 'mail/Medoo.php';
require 'mail/Hubspot.php';

use Medoo\Medoo;

$database = new Medoo([
  'database_type' => 'mysql',
  'database_name' => 'boniviajes',
  'server' => '107.180.12.35',
  'username' => 'boniviajes',
  'password' => 'qzAsPsbEsGA95e2'
]);

// Variable amigable n_n
$post = $_POST;

// Registro en la base de datos
$database->insert('web', [
  'nombre' => $post['nCompleto'],
  'email' => $post['correo'],
  'telefono' => $post['phone1'],
  'destino' => $post['destino'],
  'lada' => $post['lada'],
  'origen' => $post['origen']
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
            'property' => 'lada',
            'value' => $post['lada']
        ),
        array(
            'property' => 'origen',
            'value' => $post['origen']
        )
    )
);

hubspot($arr);

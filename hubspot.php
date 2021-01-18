<?php
  require 'assets/mail/Medoo.php';
  require 'assets/mail/Hubspot.php';

  use Medoo\Medoo;

  $database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'boniviajes',
    'server' => '107.180.12.35',
    'username' => 'boniviajes',
    'password' => 'qzAsPsbEsGA95e2'
  ]);

  $registros = $database->select('web', '*');

  foreach($registros as $registro):
    // Registro en Hubspot
    $arr = array(
        'properties' => array(
            array(
                'property' => 'firstname',
                'value' => $registro['nombre']
            ),
            array(
                'property' => 'email',
                'value' => $registro['email']
            ),
            array(
              'property' => 'phone',
              'value' => $registro['email']
            ),
            array(
                'property' => 'message',
                'value' => $registro['destino']
            ),
        )
    );

    hubspot($arr);
  endforeach;

<?php

require '../controllers/UsuarioController.php';

use Controller\UsuarioController as UC;


    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];


$response = UC::create($nombre, $email, $pass);

if($response == true) {
    echo "creado exitosamente";
}

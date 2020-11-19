<?php

require 'UsuarioController.php';

$controller = new UsuarioController();

$data = [
    'nombre' => $_POST['nombre'],
    'email' => $_POST['email'],
    'pass' => $_POST['pass']
];

$response = $controller->create($data);

if($response == true) {
    echo "creado exitosamente";
}

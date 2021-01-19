<?php
require '../controllers/UsuarioController.php';

use Controller\UsuarioController as UC;

$metodo = $_SERVER['REQUEST_METHOD'];
$response;

switch($metodo) {
    case 'GET':
        if(isset($_GET['id'])) {
            $usuario = UC::getUsuario($_GET['id']);
        } else {
            $usuarios = UC::getUsuarios();

            $response['usuarios'] = $usuarios;
            $response['estatus'] = true;
        }

        break;
    case 'POST':
            $response = $_POST;
        break;
}

$result = json_encode($response);

echo $result;

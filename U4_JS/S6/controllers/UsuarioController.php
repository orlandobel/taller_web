<?php
namespace Controller;

require '../models/Usuario.php';
require '../database/conection.php';

use Model\Usuario;
use DataBase;

class UsuarioController {

    public static function getUsuarios() {
        $usuarios = [];
        $db = DataBase::getDB();
        $index = 0;

        $sql = "SELECT * FROM usuario";
        $res = $db->query($sql);

        if(mysqli_error($db)) {
            echo mysqli_error($db);
            die();
        }

        while($row = $res->fetch_assoc()) {
            $row['index'] = $index;

            $usuarios[] = $row;
            $index++;
        }

        return $usuarios;
    }

    public static function getUsuario($id) {
        $db = DataBase::getDB();
        $usuario = null;

        $sql = "SELECT * FROM usuario where id = $id";
        $res = $db->query($sql);

        if(mysqli_error($db)) {
            echo mysqli_error($db);
            die();
        }

        if($row = $res->fetch_assoc()) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $email = $row['email'];
            $pass = $row['pass'];

            $usuario = new Usuario($id, $nombre, $email, $pass);
        }

        return $usuario;
    }

    public static function create($nombre, $email, $pass) {
        $db = DataBase::getDB();

        $sql = "INSERT INTO usuario (nombre, email, pass) VALUES ('$nombre', '$email', '$pass')";
        $db->query($sql);

        if(mysqli_error($db)) {
            echo mysqli_error($db);
            die();
        }

        return true;
    }
}
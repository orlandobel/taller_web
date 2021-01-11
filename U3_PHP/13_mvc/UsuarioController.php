<?php
require 'Usuario.php';

class UsuarioController {
    public $host = 'localhost';
    public $user = 'root';
    public $pass = 'Tuiolosega50?';
    public $db   = 'taller';
    private $conection;

    public function __construct() {
        $this->conection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public function read() {
        
        $usuarios = [];

        $sql = "SELECT * FROM usuario";
        $res = $this->conection->query($sql);
        
        if(mysqli_error($this->conection)) {
            echo mysqli_error($this->conection);
            die();
        }
        
        while($row = $res->fetch_assoc()) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $email = $row['email'];
            $pass = $row['pass'];
            
            $usuario = new Usuario($id, $nombre, $email, $pass);
            
            $usuarios[] = $usuario;
            
        }

        return $usuarios;
    }

    public function create($array) {
        $nombre = $array['nombre'];
        $email = $array['email'];
        $pass = $array['pass'];

        $sql = "INSERT INTO usuario (nombre, email, pass) VALUES ('$nombre', '$email', '$pass')";
        $res = $this->conection->query($sql);

        if(mysqli_error($this->conection)) {
            echo mysqli_error($this->conection);
            die();
        }

        return true;
    }
}
<?php
namespace Model;

class Usuario {
    private $id;
    private $nombre;
    private $email;
    private $pass;

    public function __construct($id, $nombre, $email, $pass) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->pass = $pass;
        $this->id = $id;
    }

    public function id() {
        return $this->id;
    }

    public function nombre() {
        return $this->nombre;
    }

    public function email() {
        return $this->email;
    }

    public function pass() {
        return $this->pass;
    }
}
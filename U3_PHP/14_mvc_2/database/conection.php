<?php

class DataBase {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'Tuiolosega50?';
    private $db = 'taller';

    private $conection;

    private function __construct() {
        $this->conection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }

    public static function getDB() {
        $db = new DataBase();

        return $db->conection;
    }
}
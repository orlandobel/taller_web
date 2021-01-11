<?php

$host = 'localhost';
$user = 'root';
$pass = 'Tuiolosega50?';
$db   = 'taller';

$conection = new mysqli($host, $user, $pass, $db);

if(mysqli_error($conection)) {
    echo mysqli_error($conection);
    die();
}
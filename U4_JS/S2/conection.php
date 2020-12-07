<?php

$host = 'localhost';
$user = 'root';
$pass = 'Tuiolosega50?';
$db = 'taller';

$con = new mysqli($host, $user, $pass, $db);

if(mysqli_error($con)) {
    echo "error en la conexion <br/>";
    echo mysqli_error($con);
    die();
}
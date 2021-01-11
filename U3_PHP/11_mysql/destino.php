<?php
include 'conexion.php';
    /*
    echo $_POST['deportes'][0].'<br>';
    echo $_POST['deportes'][1].'<br>';
    echo $_POST['deportes'][2].'<br>';
    
    echo $_POST['ciudad'];
*/
    

$usuario = $_POST['usuario'];
$ap1 = $_POST['ap_paterno'];
$ap2 = $_POST['ep_materno'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$gen = $_POST['genero'];

$sql = "INSERT INTO ejemplo (usuario, ap_paterno, pass, email) VALUES ('$usuario', '$ap1', '$pass', '$email')";
echo $sql.'<br/>';
$res = $conexion->query($sql);

if(mysqli_error($conexion)) {
    echo mysqli_error($conexion);
} else {
    echo 'consulta realizada';
}


?>
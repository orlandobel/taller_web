<?php
require "./conection.php";

$sql = "SELECT * FROM usuario";

$res = $con->query($sql);

if(mysqli_error($con)) {
    echo "error en la conexion <br/>";
    echo mysqli_error($con);
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="modal" id="modal1">
        <div>
            <label for="">Nombre</label>
            <input type="text" id="edit_nombre" disabled>

        </div>
        <br/>
        <div>

            <label for="">Email</label>
            <input type="text" id="edit_email" disabled>
        </div>
        <button onclick="hideModal();"> Cerrar </button>
    </div>

    <div>
        <table border="1">
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>correo</th>
            </tr>
            <?php
            while($row = $res->fetch_assoc()) {
                $nombre = $row['nombre'];
                $email = $row['email'];
            ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $nombre ?></td>
                <td><?= $email ?></td>
                <td><button onclick="showModal('<?= $nombre ?>', '<?= $email ?>');">Editar</button></td>
            </tr>

            <?php } ?>
        </table>
    </div>

    <script src="assets/js/modal.js"></script>
</body>
</html>
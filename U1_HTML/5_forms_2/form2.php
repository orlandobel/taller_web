<?php
    $nombre = $_POST['nombre'];
    $ap_paterno = $_POST['ap-paterno'];
    $ap_materno = $_POST['ap-materno'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Formulario - 2</title>
</head>
<body>
    <div class="d-flex justify-content-center">
        <div class="col-lg-4 col-md-4 mt-3">
            <div class="card">
                <div class="card-body">
                    <form action="resultado.php" method="POST">
                        <input type="hidden" name="nombre" value="<?php echo $nombre ?>">
                        <input type="hidden" name="ap-paterno" value="<?php echo $ap_paterno ?>">
                        <input type="hidden" name="ap-materno" value="<?php echo $ap_materno ?>">
                        <input type="hidden" name="edad" value="<?php echo $edad ?>">
                        <input type="hidden" name="sexo" value="<?php echo $sexo ?>">

                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" id="pass" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">Terminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    require "UsuarioController.php";

    $controller = new UsuarioController();

    $data = $controller->read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <br/>
    <div class="d-flex justify-content-center">
        <div class="col-lg-8 col-md-8 mt-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                        </thead>
                        <tbody>
                            <?php 
                            if(isset($data)) { 
                                foreach($data as $usuario) {    
                            ?>
                            <tr>
                                <th scope="row"><?php echo $usuario->id(); ?></th>
                                <td><?php echo $usuario->nombre(); ?></td>
                                <td><?php echo $usuario->email(); ?></td>
                            </tr>
                            <?php 
                                } 
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
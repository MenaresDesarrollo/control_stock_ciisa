<?php
    $id = $_POST['id'];
    $producto = $_POST['prod'];
    $cantidad = $_POST['cant'];
    $descripcion = $_POST["descripcion"];

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <a class="btn btn-primary m-2" href="../vista/home.php">Regresar</a><br><br>
    </div>
    <div class="container">
        <table class="table table table-sm mt-2">
            <thead>
                <tr>
                    <th scope="col">Código del producto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo "$id" ?></th>
                    <td><?php echo "$producto" ?></td>
                    <td><?php echo "$descripcion" ?></td>
                    <td><?php echo "$cantidad" ?></td>
                </tr>
            </tbody>
        </table>
    </div>    
</body>
</html>
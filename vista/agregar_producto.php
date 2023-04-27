<html>

<head>
    <title> FORMULARIO </title>
</head>

<body>

    ----- INGRESE SUS DATOS ----- <br><br>

    <form id="formulario" action="../controlador/agPro.php" method="POST">

        código del producto:
        <input type="number" id="id" name="id"><br><br>

        Nombre del producto:
        <input type="text" id="prod" name="prod"><br><br>

        Categoría:
        <input type="text" id="categoria" name="categoria"><br><br>

        Sucursal:
        <select name="sucursal">
            <option value="">Seleccione sucursal</option>
            <option value="Independencia">Indepe</option>
            <option value="Quilicura">Quilicumbia</option>
            <option value="Huechuraba">wechuraa</option>
        </select>
        <br><br>

        Descripción:
        <input type="text" name="descripcion">
        <br><br>

        Cantidad:
        <input type="number" id="cant" name="cant"><br><br>

        Precio:
        <input type="number" name="precio">
        <br><br>


        <button type="submit">enviar</button>
    </form>

</body>

</html>
<html>

<head>
    <title> FORMULARIO </title>
</head>

<body>
<script>
    function validar(){
        mensaje="";
        var id = document.getElementById("id").value;
        var producto = document.getElementById("prod").value;
        var categoria = document.getElementById("categoria").value;
        var cantidad = document.getElementById("cant").value;
        var precio = document.getElementById("precio").value;

        if (id=="" || producto=="" || cantidad=="" || categoria=="" || precio=="")  {
            mensaje=mensaje+"Producto no ingresado faltan datos \n";
        }
        if (mensaje!="") {
            mensaje="Datos faltantes en el formulario \n\n"+mensaje;
            alert(mensaje);
            return false;
        }
    }
</script>

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
            <option value="Independencia">Independencia</option>
            <option value="Quilicura">Quilicura</option>
            <option value="Huechuraba">Huechuraba</option>
        </select>
        <br><br>

        Descripción:
        <input type="text" name="descripcion">
        <br><br>

        Cantidad:
        <input type="number" id="cant" name="cant"><br><br>

        Precio:
        <input type="number" id="precio" name="precio">
        <br><br>


        <button type="submit" onclick="return validar();">Agregar</button>
    </form>

</body>

</html>
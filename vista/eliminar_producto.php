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
        var cantidad = document.getElementById("cant").value;

        if (id=="" || producto=="" || cantidad=="" ||)  {
            mensaje=mensaje+"Producto no ingresado faltan datos \n";
        }
        if (mensaje!="") {
            mensaje="Datos faltantes en el formulario \n\n"+mensaje;
            alert(mensaje);
            return false;
        }
    }
</script>

----- INGRESE DATOS A EDITAR ----- <br><br>
<form id="formulario" action="../controlador/edPro.php" method="POST">

        código del producto:
        <input type="number" id="id" name="id"><br><br>

        Nombre del producto:
        <input type="text" id="prod" name="prod"><br><br>

        Cantidad:
        <input type="number" id="cant" name="cant"><br><br>



        <button type="submit" onclick="return validar();">Editar</button>
</form>
           
</body>

</html>
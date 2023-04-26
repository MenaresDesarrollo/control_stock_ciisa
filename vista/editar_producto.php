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
        var marca = document.getElementById("marca").value;
        var cantidad = document.getElementById("cant").value;

        if (id=="" || producto=="" || marca=="" || cantidad=="") {
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
           
<form id="formulario" action="../controlador/edPro.php" method="POST" >

Id
<input type="number" id="id" name="id"><br><br>

Prudcto
<input type="text" id="prod" name="prod"><br><br>

Marca
<input type="text" id="marca" name="marca" ><br><br>

Cantidad
<input type="number" id="cant" name="cant"><br><br>

<button type="submit">enviar</button>
</form>

</body>

</html>
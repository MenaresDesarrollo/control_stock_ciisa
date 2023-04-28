<html>
<head>
<title> FORMULARIO </title>
</head>
<body>
<script>
    function validar(){
        mensaje="";
        var id = document.getElementById("id").value;
        var nombre = document.getElementById("nombre").value;
        var sucursal = document.getElementById("sucursal").value;

        if (id=="" || nombre=="" || sucursal=="" ||)  {
            mensaje=mensaje+"Producto no ingresado faltan datos \n";
        }
        if (mensaje!="") {
            mensaje="Datos faltantes en el formulario \n\n"+mensaje;
            alert(mensaje);
            return false;
        }
    }
</script>

----- INGRESE PRODUCTOQ QUE BUSCA ----- <br><br>
<form id="formulario" action="../controlador/BUPro.php" method="POST">

        código del producto:
        <input type="number" id="id" name="id"><br><br>

        Nombre del producto:
        <input type="text" id="nombre" name="nombre"><br><br>

        Cantidad:
        <select id="sucursal" name="sucursal">
            <option value="">Seleccione sucursal</option>
            <option value="Independencia">Independencia</option>
            <option value="Quilicura">Quilicura</option>
            <option value="Huechuraba">Huechuraba</option>
        </select><br><br>



        <button type="submit" onclick="return validar();">Buscar</button>
</form>
           
</body>

</html>

<script>
function soloNumeros(e) {
var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}
</script>

<html>
<head>
<title> FORMULARIO </title>
</head>
<body>

----- INGRESE SUS DATOS ----- <br><br>
           
<form id="formulario" action="controller/home.php" method="POST" >

Nombre
<input type="text" id="n" name="n"><br><br>

Apellido
<input type="text" id="a" name="a"><br><br>

Rut
<input type="text" id="r" name="r" onkeypress="return soloNumeros(event)"><br><br>

Edad
<input type="text" id="edad" name="edad"><br><br>

CONTRASEÑA
<input type="password" id="contrasena" name="contrasena"><br><br>
<button type="submit">enviar</button>
</form>

</body>

</html>
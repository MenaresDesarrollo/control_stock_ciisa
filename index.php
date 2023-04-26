<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <script>
    function validar(){
        mensaje="";
        var nom = document.getElementById("user").value;
        if (nom=="") {
            mensaje=mensaje+"* Usuario no ingresado \n";
        }
        var pass = document.getElementById("pass").value;
        if (pass=="") {
            mensaje=mensaje+"* Contraseña no ingresada \n";
        }
        if (mensaje!="") {
            mensaje="Datos faltantes en el formulario \n\n"+mensaje;
            alert(mensaje);
            return false;
        }
        else{
            alert("Usuario correcto!")
        }
        }
    </script>
----- Login----- <br><br>
           
    <form id="formulario" action="controlador/verUser.php" method="POST" >
           
        Usuerio
        <input type="text" id="user" name="user"><br><br>
            
        Contraseña
        <input type="password" id="pass" name="pass"><br><br>

        <button type="submit" onclick= "return validar();">enviar</button>
    </form>
</body>
</html>

<?php
    $user = $_POST['user'];

    $contrasena = $_POST['pass'];

    if($user == "admin" and $contrasena == "admin"){
        header ("Location: ../vista/home.php");
        die();
    }if($user != "admin" or $contrasena != "admin"){
        header("location: ../index.php");
    };
?>

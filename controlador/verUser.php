
<?php
    $user = $_POST['user'];

    $contrasena = $_POST['pass'];

    if($user == "admin" and $contrasena == "admin"){
        header ("Location: ../vista/view.php");
        die();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Buscar producto </title>
    </script>
    <body>
        <form action="controlador/buPro.php" method="post">
            <br>
            <input name="indice" type="radio" value="id"/>Código
            <input name="indice" type="radio" value="nombre"/>Nombre
            <input name="indice" type="radio" value="sucursal"/>Sucursal

            <select name="sucursal">
                <option value="">Seleccione sucursal</option>
                <option value="1">Indepe</option>
                <option value="2">Quilicumbia</option>
                <option value="3">wechuraa</option>
            </select>
        <button type="submit">Buscar</button>


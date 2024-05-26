<!DOCTYPE html>
<html lang="es-Co">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido a Tienda</h1>
    <form action="views/validarInicioSesion.php" method="post">
        <label for="">Usuario</label>
        <input type="text" name="user" required>
        <br>
        <label for="">Contrasena</label>
        <input type="password" name="pwd" required>
        <br>
        <button type="submit">Inciar Sesion</button>
    </form>
<?php
 /*   if (iniciarSesion) {
        # code...
    }
*/?>
</body>
</html>
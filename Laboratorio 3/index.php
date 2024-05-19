<?php
include 'controllers/DataBaseController.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Bienvenido a Tienda</h1>
    <form action="Views/ValidarInicioSesion.php" method="post">
        <label>Usuario</label>
        <br>
        <input type="text" name="user" required>
        <br>
        <label>Contraseña</label>
        <br>
        <input type="password" name="pwd" required>
        <br>
        <button type="submit">Iniciar Sesion</button>
    </form>
</body>
</html>
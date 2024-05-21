<?php
include 'Models/conexion.php';
include 'Controllers/UsuarioController.php';
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
    <form  method="post" action="">
        <label>Usuario</label>
        <br>
        <input type="text" name="user" required>
        <br>
        <label>Contraseña</label>
        <br>
        <input type="password" name="pwd" required>
        <br>
        <input type="submit" value="Iniciar Sesion" name="login">
               
    </form>
</body>
</html>
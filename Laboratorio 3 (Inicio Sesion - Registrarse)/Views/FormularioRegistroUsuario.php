<?php
include '../Models/conexion.php';
include '../Controllers/RegistroUsuarioController.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <h1>Registrar Usuario</h1>
    <div>
    <form  method="post" action="">
        <label>Usuario</label>
        <br>
        <input type="text" name="newUsuario" required>
        <br>
        <label>Contraseña</label>
        <br>
        <input type="password" name="newPwd" required>
        <br>
        <input type="submit" value="Registrarse" name="btnRegistro">     
    </form>
        <a href="../index.php">Volver</a>
    </div>
</body>
</html>
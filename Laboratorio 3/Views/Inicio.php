<?php
require '../Models/Usuario.php';
include '../Controllers/UsuarioController.php';
use app\Controllers\UsuarioController;

$controller = new UsuarioController();
$controller -> validarSesion();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido a la App
        <?php echo $_SESSION['iniciarSesion']?>
    </h1>
    <br>
    <a href="CerrarSesion.php">Cerrar Sesion</a>
</body>
</html>
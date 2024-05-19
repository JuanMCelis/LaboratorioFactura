<?php
require '../Models/Usuario.php';
include '../Controllers/UsuarioController.php';
include '../Controllers/DataBaseController.php';

use app\Models\Usuario;
use app\Controllers\UsuarioController;



$usuario = new Usuario();
$usuario -> setUsuario($_POST['user']); //Son los que reciben los parametros ingresados por el usuario
$usuario -> setPwd($_POST['pwd']);

$controlador = new UsuarioController();
$iniciarSesion = $controlador -> validarUsuario($usuario);
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Sesion</title>
</head>
<body>
    <?php
    if($iniciarSesion){
        session_start();
        $_SESSION['iniciarSesion'] = true;
        header('Location: inicio.php');
    }
    else{
        echo '<h1>Datos Incorrectos</h1>';
        echo '<br>';
        echo '<a href="../index.php">Volver</a>';
    }
    ?>
</body>
</html>
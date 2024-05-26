<?php
require '../models/Usuario.php';
include '../controllers/UsuarioController.php';

use app\models\Usuario;
use app\controllers\UsuarioController;

$usuario = new Usuario();
$usuario -> setUsuario($_POST['user']);
$usuario -> setPwd($_POST['pwd']);
$controlador = new UsuarioController();
$iniciarSesion = $controlador->validarUsuario($usuario);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar sesion</title>
</head>
<body>
    <?php
        if($iniciarSesion){
            session_start();
            $_SESSION['iniciarSesion'] = $_POST['user'];
            
            header('Location: FormularioCliente.php');
        }else{
            echo 'Datos Erroneos';
            //header('Location: ../index.php');
        }
        ?>    
</body>
</html>
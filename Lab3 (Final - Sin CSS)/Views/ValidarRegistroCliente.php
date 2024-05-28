<?php
require '../models/Cliente.php';
include '../controllers/RegistroClienteController.php';

use app\models\Cliente;
use app\controllers\RegistroClienteController;

$cliente = new Cliente();
$cliente -> setNombreCompleto($_POST['newNombreCliente']);
$cliente -> setTipoDocumento($_POST['newTipoDocumentoCliente']);
$cliente -> setNumeroDocumento($_POST['newNumDocumentoCliente']);
$cliente -> setTelefono($_POST['newTelefonoCliente']);
$cliente -> setEmail($_POST['newEmailCliente']);

$controlador = new RegistroClienteController();
$registrar = $controlador -> validarCliente($cliente);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <?php
        if($registrar){
            echo 'Se ha resigistrado correctamente';
            echo '<a href="FormularioCliente.php">Volver</a>';
        }else{
            echo 'No se que paso matese';
            echo '<a href="RegistroCliente.php">Volver</a>';  
            
        }
        ?>    
</body>
</html>
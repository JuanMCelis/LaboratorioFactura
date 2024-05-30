<?php
require '../models/Cliente.php';
include '../controllers/ClienteController.php';

use app\models\Cliente;
use app\controllers\ClienteController;

$cliente = new Cliente();
$cliente -> setNombreCompleto($_POST['nombreCliente']);
$cliente -> setTipoDocumento($_POST['tipoDocumentoCliente']);
$cliente -> setNumeroDocumento($_POST['numDocumentoCliente']);
$cliente -> setTelefono($_POST['telefonoCliente']);
$cliente -> setEmail($_POST['emailCliente']);

$controlador = new ClienteController();

$validar = $controlador->validarCliente($cliente);
if (is_array($validar)) {
    $idCliente = $validar['idCliente'];
} 
session_start();       
$_SESSION['ID'] = $cliente -> getId();



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
        if($validar){  
            header('Location: GenerarFactura.php');
        }else{
            echo 'Hubo un error';
            echo '<a href="FormularioCliente.php">Volver</a>';  
            
        }
        ?>  
    
      
</body>
</html>
<?php

require '../models/Factura.php';
//require '../models/Cliente.php';
include '../controllers/FacturaController.php';
include '../Controllers/ClienteController.php';
//include_once '../Views/ValidarCliente.php';

use app\models\Cliente;
use app\models\Factura;
use app\controllers\FacturaController;
//use app\controllers\ClienteController;


session_start();

$idCliente = $_SESSION['ID'];
$factura = new Factura();
$factura -> setValorFactura($_POST['valorAPagar']);
$controlador = new FacturaController();
$facturacion = $controlador -> analizarFactura($factura);
$facturacion = $controlador -> generarFactura($factura,$idCliente);


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sca le=1.0">
    <title>Validar sesion</title>
</head>
<body>
    <?php
        if($facturacion){
          //echo 'Funciona'; 
          echo '<a href="GenerarFactura.php">Volver</a>'; 
        }
    ?>    
</body>
</html>
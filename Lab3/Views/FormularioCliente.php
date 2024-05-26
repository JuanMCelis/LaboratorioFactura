<?php
require '../models/Usuario.php';
include '../controllers/UsuarioController.php';

use app\controllers\UsuarioController;

$controller = new UsuarioController();
$controller->validarSesion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    <h1>
        Bienvenido a la app 
        <?php echo $_SESSION['iniciarSesion'];
            //echo $_SESSION['usuario'];
        ?>
    </h1>
    <br>

    <h1>Cliente</h1>
    <form action="" method="post">
        <label>Nombre Completo:</label>
        <input type="text" name="nombreCliente">
        <br>
        <label>Numero de Documento:</label>
        <input type="text" name="numDocumentoCliente">
        <br>
        <label>Tipo de Documento</label>
        <select name="tipoDocumentoCliente" id="">
            <option hidden disable option>Seleccione una opcion</option>
            <option value='CC'>Cedula de Ciudadania</option>
            <option value='CE'>Cedula de Extranjeria</option>
            <option value='NIT'>NIT</option>
            <option value='TI'>Tarjeta de Identidad</option>
            <option value='Otro'>Otro</option>
        </select>
        <br>
        <label>Telefono:</label>
        <input type="text" name="telefonoCliente">
        <br>
        <label>Email:</label>
        <input type="email" name="emailCliente" id="">
    </form>
    
    <p>No esta registrado?</p>
    <form action="RegistroCliente.php" method="post">
    <button type="submit">Registrar Cliente</button>
    </form>
    <a href="cerrarSesion.php">Cerrar sesion</a>
</body>
</html>
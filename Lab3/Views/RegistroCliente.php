<?php
include '../Controllers/RegistroClienteController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroCliente</title>
</head>
<body>
<h1>Registrar Cliente</h1>
    <form action="" method="post">
        <label>Nombre Completo:</label>
        <input type="text" name="newNombreCliente">
        <br>
        <label>Numero de Documento:</label>
        <input type="text" name="newNumDocumentoCliente">
        <br>
        <label>Tipo de Documento</label>
        <select name="newTipoDocumentoCliente" id="">
            <option hidden disable option>Seleccione una opcion</option>
            <option value='CC'>Cedula de Ciudadania</option>
            <option value='CE'>Cedula de Extranjeria</option>
            <option value='NIT'>NIT</option>
            <option value='TI'>Tarjeta de Identidad</option>
            <option value='Otro'>Otro</option>
        </select>
        <br>
        <label>Telefono:</label>
        <input type="text" name="newTelefonoCliente">
        <br>
        <label>Email:</label>
        <input type="email" name="newEmailCliente" id="">
        <br>
        <button type="submit">Registrar</button>
    </form>
        <a href="FormularioCliente.php">Volver</a>
</body>
</html>
<?php
include '../Controllers/RegistroClienteController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/index.css">
    <title>RegistroCliente</title>
</head>
<body>
    <div>
        <h1>Registrar Cliente</h1>
    <form action="ValidarRegistroCliente.php" method="post">
        <label>Nombre Completo:</label>
        <input type="text" name="newNombreCliente" required>
        <br>
        <label>Numero de Documento:</label>
        <input type="number" name="newNumDocumentoCliente" required>
        <br>
        <label>Tipo de Documento</label>
        <select name="newTipoDocumentoCliente" id="" required>
            <option hidden disabled selected>Seleccione una opcion</option>
            <option value='CC'>Cedula de Ciudadania</option>
            <option value='CE'>Cedula de Extranjeria</option>
            <option value='NIT'>NIT</option>
            <option value='TI'>Tarjeta de Identidad</option>
            <option value='Otro'>Otro</option>
        </select>
        <br>
        <label>Telefono:</label>
        <input type="number" name="newTelefonoCliente" required>
        <br>
        <label>Email:</label>
        <input type="email" name="newEmailCliente" id="" required>
        <br>
        <button type="submit">Registrar</button>
    </form>
        <a href="FormularioCliente.php">Volver</a>
    </div>
</body>
</html>
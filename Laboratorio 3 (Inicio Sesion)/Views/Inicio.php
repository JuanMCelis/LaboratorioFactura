<?php
session_start();
if (empty($_SESSION["id"])) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 'Bienvenido a la app '.$_SESSION["usuario"]; //Muestra un mensaje seguido de el nombre de usuario
    ?>
    <br>
    <a href="CerrarSesion.php">Cerrar sesion</a>
</body>
</html>
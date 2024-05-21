<!--?php
$id = empty($_GET['id']) ?0 :$_GET['id'];
?>-->

<!DOCTYPE html>
<html lang="es-CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Generar Factura</h1>
    
    <form action="guardarContacto.php"  method="post">
        
        <!--?input type="hidden" name="id" value="<?php echo $id;?>"-->
        <div>
            <label for="">Nombre Completo:</label>
            <input type="text" name="nombre" required id="0" placeholder="Nombre Completo">
        </div>
        <div>
            <label for="">Tipo de documento</label>
            <input list="TipoDocumentos" name="documentos" placeholder="">
            <datalist id="DocumentsOptions">
            <option value="Cedula de Ciudadania"></option>
            <option value="Tarjeta de Identidad"></option>
            </datalist>
            
        </div>
        <div>
            <label for="">Email:</label>
            <input type="email" name="email" require id="">
        </div>
        <div>
            <label for="">Telefono:</label>
            <input type="text" name="telefono">
        </div>
        <button type="submit">Guardar</button>
    </form>
    <?php
    ?>
</body>
</html>
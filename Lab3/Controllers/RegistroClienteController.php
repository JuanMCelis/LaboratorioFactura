<?php

namespace app\controllers;



if (!empty($_POST["newUsuario"]) and !empty($_POST["newPwd"])) { //Mira q el usuario y la contraseña no esten vacias
    $newUsuario = $_POST["newUsuario"]; // Nos trae el valor ingresado por el usuario en Usuario.
    $newPwd = $_POST["newPwd"]; //Nos trae el valor ingresado por el usuario en contraseña

    $sql1 = "SELECT * FROM usuarios WHERE usuario = '$newUsuario' "; //Verifica que el usuario ingresado no exista en la base de datos
    $sql2 = "SELECT * FROM usuarios WHERE pwd='$newPwd' "; //Verifica que la contraseña ingresada no exista en la base de datos
      
    $result1 = $conex -> query($sql1); //Consulta de usuario
    $result2 = $conex -> query($sql2); //Consulta de contraseña
      
    $confirmacionUsuario = true;
    $confirmacionPwd = true;

    if ($result1 -> num_rows > 0) { //Validacion Usuario existente
        echo "El usuario ya existe.";
        $confirmacionUsuario = false;
    }

    if($result2 -> num_rows > 0) { //Validacion Pwd existente
        echo "Contraseña no disponible.";
        $confirmacionPwd = false;
    }   
    
        if ($confirmacionPwd == true and $confirmacionUsuario == true) {
            //echo "El usuario no existe en la base de datos. Puedes continuar.";
            $sql = $conex -> query(" insert into usuarios (usuario,pwd)
            values('$newUsuario','$newPwd')");  //Ejecuta el insert into usuarios con los valores para agregarlos a la base de datos.
            if ($sql == 1 ) { //Si sql responde uno significa que la secuencia sql se ha ejecutado bien
                echo 'Registro satisfactorio';
            }else {
                echo 'Ha habido un error al registrarse, intente nuevamente';      
            }

        }    
}

?>
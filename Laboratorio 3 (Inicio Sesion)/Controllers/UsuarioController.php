<?php

namespace app\controllers;

session_start(); //Inicia el metodo de session start

if (!empty($_POST["login"])) { //Verifica que se haya oprimido el boton de iniciar sesion
    if (!empty($_POST["user"]) and !empty($_POST["pwd"])) { //Mira q el usuario y la contraseña no esten vacias
    $usuario = $_POST["user"]; // Nos trae el valor ingresado por el usuario en Usuario.
    $pwd = $_POST["pwd"]; //Nos trae el valor ingresado por el usuario en contraseña
    $sql = $conex -> query(" SELECT * FROM usuarios WHERE usuario='$usuario' AND pwd='$pwd' "); 
    //Hace la consulta si esos valores ingresados por el usuario existen en la base de datos
    if($result = $sql -> fetch_object()) { //Devuelve la fila actual de un conjunto de resultados como un objeto
        $_SESSION["id"]= $result -> id; 
        $_SESSION["usuario"] = $result -> usuario;
        $_SESSION["pwd"] = $result -> pwd;
        //Almacena los datos de id,usuario y la password
        header('Location: Views/Inicio.php ');
    }else {
        echo "Datos incorrectos";
    }
    
    }else{
        echo "Hay datos vacios";
    }
}

?>
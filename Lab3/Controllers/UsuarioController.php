<?php

namespace app\controllers;

use mysqli;

require_once 'DataBaseController.php';
Use App\controllers\DataBaseController;

class UsuarioController
{
    function validarUsuario($usuario)
    {
        $dbController = new DataBaseController();
        $conex = new mysqli("localhost","root","","facturacion_tienda_db"); //Conexion a la base de datos
        $user = $usuario -> getUsuario(); //Valores ingresados (usuario)
        $pwd = $usuario -> getPwd(); //Valores ingresados (contraseña)
        $sql =(" SELECT * FROM usuarios WHERE usuario='$user' AND pwd='$pwd' "); //consulta si el usuario existe 
        $result = $dbController->execSql($sql); //ejecuta el sql
        
        if($result -> num_rows == 1) { //Si el condicional encuentra el usuario y contraseña bota 1 si no bota 0
            return true; // Usuario válido
        } else {
            return false; // Usuario inválido
        }
          
    }

    function validarSesion()
    {
        session_start();
        if (empty($_SESSION['iniciarSesion'])) {
            header('Location: ../index.php');
        }
    }
}

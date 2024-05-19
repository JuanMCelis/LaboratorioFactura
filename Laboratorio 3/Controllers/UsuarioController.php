<?php

namespace app\Controllers;

class UsuarioController{
    function validarUsuario($usuario,){
        /**
         * lineas de codigo para conectarnos a la base de datos 
         * y ejecutar el select * from usuarios where usuario='' and pwd=''
         */
        return $usuario -> getUsuario() 
         && $usuario -> getPwd();
  
         
    }

    function validarSesion(){
        session_start();
        if(empty($_SESSION['iniciarSesion'])){
    
        }
    }


}


?>
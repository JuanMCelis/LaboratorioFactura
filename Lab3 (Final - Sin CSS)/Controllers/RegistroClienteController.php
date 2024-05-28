<?php

namespace app\controllers;

require_once 'DataBaseController.php';
Use App\controllers\DataBaseController;

class RegistroClienteController {
    function validarCliente($cliente){
        $dbController = new DataBaseController();
        $newCliente = $cliente -> getNombreCompleto();
        $newTipoDocumento = $cliente -> getTipoDocumento();
        $newNumDocumento = $cliente -> getNumeroDocumento();
        $newTelefono = $cliente -> getTelefono(); 
        $newEmail = $cliente -> getEmail();

        $sql1 = "SELECT * FROM clientes WHERE nombreCompleto = '$newCliente' "; //Verifica que el usuario ingresado no exista en la base de datos
        $sql2 = "SELECT * FROM clientes WHERE numeroDocumento = '$newNumDocumento' "; //Verifica que el usuario ingresado no exista en la base de datos
        $sql3 = "SELECT * FROM clientes WHERE email ='$newEmail' ";
        $sql4 = "SELECT * FROM clientes WHERE telefono = '$newTelefono' "; //Verifica que el usuario ingresado no exista en la base de datos
    
        $result1 = $dbController->execSql($sql1); //ejecuta el sql
        $result2 = $dbController->execSql($sql2);
        $result3 = $dbController->execSql($sql3);
        $result4 = $dbController->execSql($sql4);

        $confirmacionCliente = true;
        $confirmacionNumeroDocumento = true;
        $confirmacionTelefono = true;
        $confirmacionEmail = true;

        if ($result1 -> num_rows > 0) { //Validacion Usuario existente
            echo "El Cliente ya existe.";
            $confirmacionCliente = false;
        }
    
        if($result2 -> num_rows > 0) { //Validacion Pwd existente
            echo "El numero de documento ya se encuentra registrado.";
            $confirmacionNumeroDocumento = false;
        }   
        if ($result3 -> num_rows > 0) { //Validacion Usuario existente
            echo "El Telefono ya existe.";
            $confirmacionTelefono = false;
            
        }
    
        if($result4 -> num_rows > 0) { //Validacion Pwd existente
            echo "Email no disponible.";
            $confirmacionEmail = false;
            
        } 
        

        if ($confirmacionCliente == true and $confirmacionNumeroDocumento == true and
            $confirmacionTelefono == true and $confirmacionEmail == true) {
                //echo "El usuario no existe en la base de datos. Puedes continuar.";
            $sql = " insert into clientes (nombreCompleto,tipoDocumento,numeroDocumento,email,telefono)
                values('$newCliente','$newTipoDocumento','$newNumDocumento','$newEmail','$newTelefono')";
            
            
            $insercion = $dbController -> execSql($sql);
            

            if ($insercion == 1 ) { //Si sql responde uno significa que la secuencia sql se ha ejecutado bien
                return true;
                //echo 'Registro satisfactorio';
            }else {
                return false;
                //echo 'Ha habido un error al registrarse, intente nuevamente';      
            }

        }  

    }
}


?>
<?php

namespace app\controllers;

require_once 'DataBaseController.php';
Use App\controllers\DataBaseController;

class ClienteController {
    function validarCliente($cliente){
        $dbController = new DataBaseController();
        
        $Cliente = $cliente -> getNombreCompleto();
        $TipoDocumento = $cliente -> getTipoDocumento();
        $NumDocumento = $cliente -> getNumeroDocumento();
        $Telefono = $cliente -> getTelefono(); 
        $Email = $cliente -> getEmail();


        $sql1 = "SELECT * FROM clientes WHERE nombreCompleto = '$Cliente' "; //Verifica que el usuario ingresado no exista en la base de datos
        $sql2 = "SELECT * FROM clientes WHERE numeroDocumento = '$NumDocumento' "; //Verifica que el usuario ingresado no exista en la base de datos
        $sql3 = "SELECT * FROM clientes WHERE email ='$Email' ";
        $sql4 = "SELECT * FROM clientes WHERE telefono = '$Telefono' "; //Verifica que el usuario ingresado no exista en la base de datos
        


        $sqlId = "SELECT id FROM clientes WHERE numeroDocumento = '$NumDocumento' ";
                
                $idCliente = $dbController->execSql($sqlId);

                if ($idCliente ->num_rows > 0) {
                    // Obtener el primer resultado (suponiendo que el nombre es único)
                    $fila = $idCliente->fetch_assoc();
                    $id_cliente = $fila["id"];
        
                    $cliente -> setId($id_cliente);
                    echo 'Este es el de la funcion '. $cliente -> getId();
                }



        $result1 = $dbController->execSql($sql1); //ejecuta el sql
        $result2 = $dbController->execSql($sql2);
        $result3 = $dbController->execSql($sql3);
        $result4 = $dbController->execSql($sql4);

        $confirmacionCliente = true;
        $confirmacionNumeroDocumento = true;
        $confirmacionTelefono = true;
        $confirmacionEmail = true;

        if ($result1 -> num_rows <= 0) { //Validacion Usuario existente
            echo "El Cliente no existe.";
            $confirmacionCliente = false;
        }
    
        if($result2 -> num_rows <= 0) { //Validacion Pwd existente
            echo "El numero de documento no se encuentra registrado.";
            $confirmacionNumeroDocumento = false;
        }   
        if ($result3 -> num_rows <= 0) { //Validacion Usuario existente
            echo "El Telefono no existe.";
            $confirmacionTelefono = false;
            
        }
    
        if($result4 -> num_rows <= 0) { //Validacion Pwd existente
            echo "Email no existe.";
            $confirmacionEmail = false;
            
        } 



        if ($confirmacionCliente == true and $confirmacionNumeroDocumento == true and
            $confirmacionTelefono == true and $confirmacionEmail == true) {
                echo 'Este es el del return '. $cliente -> getId();
                
                return ['valido' => true, 'idCliente' => $idCliente];
                 
        } 
            return false; 
    }
}
<?php

namespace app\controllers;
//require_once 'DataBaseController.php';
//include 'ClienteController.php';
Use App\controllers\DataBaseController;

class FacturaController{
    function analizarFactura($factura){
        
        $valorIngresado = $factura -> getValorFactura();
        /*
        if ($valorIngresado >= 650000) {
            $descuento = $valorIngresado * 0.08; // 8% de descuento
            $numDescuento = '8';
        } elseif ($valorIngresado >= 200000) {
            $descuento = $valorIngresado * 0.04; // 4% de descuento
            $numDescuento = '4';
        } elseif ($valorIngresado >= 100000) {
            $descuento = $valorIngresado * 0.02; // 2% de descuento
            $numDescuento = '2';
        } else {
            $descuento = 0; // Sin descuento
            $numDescuento = '0';
        }
        */
        if ($valorIngresado >= 650000) {
            $descuento = $valorIngresado * 0.1; // 10% de descuento
            $numDescuento = '10';
        } elseif ($valorIngresado >= 100000) {
            $descuento = $valorIngresado * 0.05; // 5% de descuento
            $numDescuento = '5';
        } else {
            $descuento = 0; // Sin descuento
            $numDescuento = '0';
        }


        
        // Calcular total a pagar
        $totalPagar = $valorIngresado - $descuento;
        
        // Mostrar resultados
        /*echo 'Numero de Descuento:'. $numDescuento;
        echo '<br>';
        echo "Valor ingresado: $" . $valorIngresado;
        echo '<br>';
        echo "Descuento aplicado: $" . $descuento;
        echo '<br>';
        echo "Total a pagar: $" . $totalPagar;
        echo '<br>';
         */     
            $factura -> setDescuento($numDescuento);
            $factura -> setValorFactura($totalPagar);
    }


    
    function generarFactura($factura,$valorId){
        $dbController = new DataBaseController();
        $codigo_unico = substr(uniqid(), 0, 10);
        
        date_default_timezone_set("America/Bogota");
        $fecha_actual = date("Y-m-d H:i");       
        
        $referencia = $codigo_unico;
        $fecha = $fecha_actual;
                      
        
        $idCliente = $valorId;
        

        $descuento = $factura -> getDescuento();
        $valorTotalFinal = $factura -> getValorFactura();
        
        
        
            
        echo '<div>';
        echo '<br>';
        echo 'Referencia: '. $referencia;
        echo '<br>';
        echo 'Fecha: '.$fecha_actual;
        echo '<br>';
        echo 'Descuento: '.$descuento.'%';
        echo '<br>';
        echo 'Total a Pagar: $'.$valorTotalFinal;
        echo '</div>';

        $sql = " insert into facturas (refencia,fecha,idCliente,descuento,valorFactura)
                values('$referencia','$fecha','$idCliente','$descuento','$valorTotalFinal')";
        
        $result = $dbController->execSql($sql);

        if ($result == 1 ) { //Si sql responde uno significa que la secuencia sql se ha ejecutado bien
            return true;
        }else {
            return false;     
        }
    }
}


?>

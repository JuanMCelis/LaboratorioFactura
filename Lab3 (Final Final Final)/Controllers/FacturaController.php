<?php

namespace app\controllers;

Use App\controllers\DataBaseController;

class FacturaController{
    function analizarFactura($factura){
        
        $valorIngresado = $factura -> getValorFactura();
        
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
        /*
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
        */

        
        // Calcular total a pagar
        $totalPagar = $valorIngresado - $descuento;
        
           
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
         
        echo '<div class="readFactura">
             <h2>Factura</h2>
                <table>
                    <tr>
                        <th>Concepto</th>
                        <th>Detalle</th>
                    </tr>';
        echo '<tr>
                    <td>Referencia</td>
                    <td>'.$referencia.'</td>
                </tr>';
        echo '<tr>
                    <td>Fecha</td>
                    <td>'.$fecha_actual.'</td>
                </tr>';
        echo '<tr>
                    <td>Descuento</td>
                    <td>'.$descuento.'%</td>
                </tr>';
        echo '<tr class="total">
                    <td>Total</td>
                    <td>$'.$valorTotalFinal.'</td>
                </tr>
            </table>
        </div>';

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

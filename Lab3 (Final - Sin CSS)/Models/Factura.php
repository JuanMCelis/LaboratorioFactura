<?php

namespace app\models;

class Factura
{
    
    private $referencia;
    private $fecha;
    private $idCliente;
    private $descuento;
    private $valorFactura;

    function getReferencia()
    {
        return $this -> referencia;
    }
    function setReferencia($value)
    {
        $this -> referencia = $value;
    }

    function getFecha()
    {
        return $this -> fecha;
    }
    function setFecha($value)
    {
        $this -> fecha = $value;
    }

    function getIdCliente()
    {
        return $this -> idCliente;
    }

    function setIdCliente($value)
    {
        $this -> idCliente = $value;
    }

    function getDescuento()
    {
        return $this -> descuento;
    }

    function setDescuento($value)
    {
        $this -> descuento = $value;
    }

    function getValorFactura()
    {
        return $this -> valorFactura;
    }

    function setValorFactura($value)
    {
        $this -> valorFactura = $value;
    }
    
}

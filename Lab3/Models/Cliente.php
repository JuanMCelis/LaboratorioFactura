<?php

namespace app\models;

class Cliente
{
    private $id;
    private $nombreCompleto;
    private $numeroDocumento;
    private $tipoDocumento;
    private $telefono;
    private $email;

    
    
    function getId(){
        return $this -> id;
    }
    function setId($value){

        $this -> id =$value;
    }
    function getnombreCompleto()    
    {
        return $this -> nombreCompleto ;
    }
    function setnombreCompleto($value)
    {
        $this -> nombreCompleto = $value;
    }

    function getnumeroDocumento()
    {
        return $this -> numeroDocumento;
    }
    function setnumeroDocumento($value)
    {
        $this -> numeroDocumento = $value;
    }

    function getTipoDocumento()
    {
        return $this -> tipoDocumento;
    }
    function setTipoDocumento($value)
    {
        $this -> TipoDocumento = $value;
    }
    function getTelefono(){
        return $this -> telefono;
    }

    function setTelefono($value){
        $this -> telefono = $value;
    }
    function getEmail(){
        return $this -> email;
    }
    function setEmail($value){
        $this -> email = $value;
    }
}

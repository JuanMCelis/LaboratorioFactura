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
    function getNombreCompleto()    
    {
        return $this -> nombreCompleto ;
    }
    function setNombreCompleto($value)
    {
        $this -> nombreCompleto = $value;
    }

    function getNumeroDocumento()
    {
        return $this -> numeroDocumento;
    }
    function setNumeroDocumento($value)
    {
        $this -> numeroDocumento = $value;
    }

    function getTipoDocumento()
    {
        return $this -> tipoDocumento;
    }
    function setTipoDocumento($value)
    {
        $this -> tipoDocumento = $value;
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

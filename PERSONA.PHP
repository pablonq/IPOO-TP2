<?php
class persona{
    private $nombre;
    private $apellido;
    private $tel;
    private $numdni;

    public function __construct($nombre, $apellido, $tel, $numdni){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->tel=$tel;
        $this->numdni=$numdni;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    
    public function setDni($numdni){
        $this->numdni=$numdni;
    }
    
    public function setTel($tel){
        $this->tel=$tel;
    }
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getApellido(){
        return $this->apellido;
    }
    public function getDni(){
        return $this->numdni;
    
    }
    public function getTel(){
        return $this->tel;
    
    }
    
    public function __toString(){
        return "El nombre es: ".$this->getNombre()."\n"."Apellido: ".$this->getApellido()."\n"."Telefono: ".$this->getTel()."\n"."Numero de DNI: ".$this->getDni();
    
    }
}

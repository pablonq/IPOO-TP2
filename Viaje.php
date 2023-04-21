<?php
class viajes{
    private $codigo;
    private $destino;
    private $cantPasajeros;
    private $objPasajero;
    private $objResponsable;

public function __construct($codigo,$destino,$cantPasajeros,$objPasajero, $objResponsable)
{
    $this->codigo=$codigo;
    $this->destino=$destino;
    $this->cantPasajeros=$cantPasajeros;
    $this->objPasajero=$objPasajero;
    $this->objResponsable=$objResponsable;
    
    
}    
public function getCodigo(){
    return $this->codigo;
}
public function setCodigo($codigo){
    $this->codigo=$codigo;
}
public function getDestino(){
    return $this->destino;
}
public function setDestino($destino){
    $this->destino=$destino;
}
public function getCantPasajeros(){
    return $this->cantPasajeros;
}
public function setCantPasajeros($cantPasajeros){
    $this->cantPasajeros=$cantPasajeros;
}
public function getPasajeros(){
    return $this->objPasajero;
}
public function setPasajeros($objPasajero){
    $this->objPasajero=$objPasajero;
}
public function getResponsable(){
    return $this->objResponsable;
}
public function setResponsable($objResponsable){
    $this->objResponsable=$objResponsable;
}
public function __toString()
{
    return "El codigo del viaje es: ".$this->getCodigo()."\n".
    "El destino es: ".$this->getDestino()."\n"
    ."La cantidad de pasajeros es: ".$this->getCantPasajeros()."\n".
    "Los pasajeros son: ".$this->mostrarPasajeros()."\n".
    "El responsable es: ".$this->getResponsable();

}
public function mostrarPasajeros(){
    $pasajeros="";
    $colPasajeros=$this->getPasajeros();
    for($i=0;$i<count($colPasajeros);$i++){
        
        $pasajeros=$pasajeros.$colPasajeros[$i];
    }
    return $pasajeros;

}

public function agregarPasajero($pasajero){
    $colPasajeros=$this->getPasajeros();
    $exito=false;
    $i=0;
    while($i<count($colPasajeros)&&!$exito){
        $objPasajeros=$colPasajeros[$i];
        if($objPasajeros->getApellido()==$pasajero->getApellido()){
            $exito=true;
        }
        $i++;

    }
    if(!$exito){
        $colPasajeros[]=$pasajero;
        $this->setPasajeros($colPasajeros);
        $mje="Pasajero agregado con exito";
    }
    else{
        $mje="El pasajero ya se encuentra en la lista";
    }
return $mje;

    
   
}
public function quitarPasajero($pasajero){
    $colPasajeros=$this->getPasajeros();
    $exito=false;
    $i=0;
    while($i<count($colPasajeros)&&!$exito){
        $objPasajeros=$colPasajeros[$i];
        if($objPasajeros->getDni()==$pasajero->getDni()){
            $exito=true;
            array_splice($colPasajeros,$i,1);
            $this->setPasajeros($colPasajeros);
        }
        $i++;

    }
    return $this->getPasajeros();
    

    
   
}
public function modificarDatosPasajero($pasajero, $pasajero2){
    $colPasajeros=$this->getPasajeros();
    $exito=false;
    $i=0;
    while($i<count($colPasajeros)&&!$exito){
        $objPasajeros=$colPasajeros[$i];
        if($objPasajeros->getDni()==$pasajero->getDni()){
            $exito=true;
            array_splice($colPasajeros,$i,1);
            $colPasajeros[]=$pasajero2;
            $this->setPasajeros($colPasajeros);
        }
        $i++;
}
return $this->getPasajeros();

}
public function cambiarCodigo($codigo){
    $this->setCodigo($codigo);

    return $this->getCodigo();
    
}
public function cambiarDestino($destino){
    $this->setDestino($destino);
    return $this->getDestino();
    
}
function cantPasajeros($nuevoCantPasajeros){
    $this->setCantPasajeros($nuevoCantPasajeros);
    return $this->getCantPasajeros();
}
}

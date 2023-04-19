<?php
class viaje{
    private $codigo;
    private $destino;
    private $cantPasajeros;
    private $pasajerosViaje=[];
    private $responsableV=[];

public function __construct($codigo,$destino,$cantPasajeros,$pasajerosViaje, $responsableV)
{
    $this->codigo=$codigo;
    $this->destino=$destino;
    $this->cantPasajeros=$cantPasajeros;
    $this->responsableV=$responsableV;
    $this->pasajerosViaje=$pasajerosViaje;
    
    
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
public function getPasajerosViaje(){
    return $this->pasajerosViaje;
}
public function setPasajerosViaje($pasajerosViaje){
    $this->pasajerosViaje=$pasajerosViaje;

}
public function getResponsableV(){
    return $this->responsableV;
}
public function setResponsableV($responsableV){
    $this->responsableV=$responsableV;
}

public function __toString()
{
    return "El codigo del viaje es: ".$this->getCodigo()."\n"."El destino es: ".$this->getDestino()."\n"."La cantidad de pasajeros es: ".$this->getCantPasajeros();

}
public function agregarPasajero($pasajero){
    
    $arrayNuevo = $this->getPasajerosViaje();
    array_push($arrayNuevo, $pasajero);
    $this->setPasajerosViaje($arrayNuevo);

    
    return $this->getPasajerosViaje();
}
public function quitarPasajero($pasajero){
    
    $arregloPasajeros=$this->getPasajerosViaje();
    $n=count($arregloPasajeros);

    for($i=0;$i<$n;$i++){
        if($pasajero==$arregloPasajeros[$i]["dni"]){
            array_splice($arregloPasajeros,$i,1);
            $this->setPasajerosViaje($arregloPasajeros);
            
        }
    }
    return $arregloPasajeros;
}
public function modificarDatosPasajero($pasajero, $pasajero2){
    $arregloPasajeros=$this->getPasajerosViaje();
    $n=count($arregloPasajeros);
    for($i=0;$i<$n;$i++){
        if($pasajero==$arregloPasajeros[$i]["dni"]){
            array_splice($arregloPasajeros,$i,1);
            array_push($arregloPasajeros,$pasajero2);
            $this->setPasajerosViaje($arregloPasajeros);
            print_r($arregloPasajeros);
        }
    }
    return $arregloPasajeros;

}
/*Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los atributos nombre, apellido,
 numero de documento y teléfono. El viaje ahora contiene una referencia a una colección de objetos de la clase Pasajero.
 También se desea guardar la información de la persona responsable de realizar el viaje, para ello cree una clase ResponsableV 
 que registre el número de empleado, número de licencia, nombre y apellido. La clase Viaje debe hacer referencia al responsable 
 de realizar el viaje.

Volver a implementar las operaciones que permiten modificar el nombre, apellido y teléfono de un pasajero. 
Luego implementar la operación que agrega los pasajeros al viaje, solicitando por consola la información de los mismos. 
Se debe verificar que el pasajero no este cargado mas de una vez en el viaje. De la misma forma cargue la información del 
responsable del viaje.*/ 





}

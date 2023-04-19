<?php
include_once "Viaje.php";
include_once "responsableV.php";
include_once "pasajero.php";

function seleccionarOpcion(){

        echo "--------------------------------------------------------------\n";
        echo "\n ( 1 ) Cambiar codigo de viaje"; 
        echo "\n ( 2 ) Cambiar destino del viaje"; 
        echo "\n ( 3 ) Cambiar cantidad de pasajeros";
        echo "\n ( 4 ) Agregar lista de pasajeros";
        echo "\n ( 5 ) Quitar pasajero";
        echo "\n ( 6 ) Modificar pasajero";
        echo "\n ( 7 ) Ver viaje";
        echo "\n ( 8 ) Salir"; 
        echo "\n --------------------------------------------------------------\n";
        $opcion= (trim(fgets(STDIN)));
        return $opcion;
}
function cambiarcodigo($viajeFeliz){
    echo "Ingrese el nuevo codigo del viaje: ";
    $codigo=trim(fgets(STDIN));
    $viajeFeliz->setCodigo($codigo);
    return $viajeFeliz;
}
function destino($viajeFeliz){
    echo "Ingrese el nuevo destino del viaje: ";
    $destino=trim(fgets(STDIN));
    $viajeFeliz->setDestino($destino);
    return $viajeFeliz;
    
}
function cantPasajeros($viajeFeliz){
    echo "Ingrese la nueva cantidad de pasajeros: ";
    $cantPasajeros=trim(fgets(STDIN));
    $viajeFeliz->setCantPasajeros($cantPasajeros);
    return $viajeFeliz;
}
function listaPasajeros(){
    $pasajeros=[];
    
        echo "Ingrese el Nombre: ";
       
        $nombre=trim(fgets(STDIN));
        $pasajeros["nombre"]=$nombre;
        echo "Ingrese el Apellido: ";
        $apellido=trim(fgets(STDIN));
        $pasajeros["apellido"]=$apellido;
        echo "Ingrese el dni: ";
        $dni=trim(fgets(STDIN));
        $pasajeros["dni"]=$dni;
        echo "Ingrese el telefono: ";
        $telefono=trim(fgets(STDIN));
        $pasajeros["telefono"]=$telefono;
        $nuevoPasajeros=new pasajero($nombre,$apellido,$dni,$telefono);
    
    return $pasajeros;

}


//Creacion del objeto responsable
$responsableV=[];
echo "Ingrese los siguientes datos del responsable de viaje:\n";
echo "----------------\n";
echo "Ingrese el numero de empleado: \n";
$numEmpleado = trim(fgets(STDIN));
echo "Ingrese el numero de licencia: \n";
$numLicencia = trim(fgets(STDIN));
echo "Ingrese el nombre: \n";
$nombre = trim(fgets(STDIN));
echo "Ingrese el apellido: \n";
$apellido = trim(fgets(STDIN));
$responsableV["numeroEmpleado"]=$numEmpleado;
$responsableV["numeroLicencia"]=$numLicencia;
$responsableV["nombre"]=$nombre;
$responsableV["apellido"]=$apellido;

$nuevoresponsableV=new ResponsableV($numEmpleado,$numLicencia, $nombre, $apellido );

// CREACIÓN DEL OBJETO VIAJE
echo "Ingrese los siguientes datos:\n";
echo "----------------\n";
echo "Ingrese el código del viaje: \n";
$codigoNuevo = trim(fgets(STDIN));
echo "Ingrese el destino: \n";
$destinoNuevo = trim(fgets(STDIN));
echo "Ingrese la máxima cantidad de pasajeros: \n";
$cantPasajerosNuevo = trim(fgets(STDIN));

$pasajerosViaje=[];
$viajeFeliz=new Viaje($codigoNuevo,$destinoNuevo,$cantPasajerosNuevo, $pasajerosViaje, $responsableV);
do{
    $opcion=seleccionarOpcion();
    switch($opcion){
        case 1:
            echo "El codigo anterior es: ".$viajeFeliz->getCodigo()."\n";

            $nuevoCodigo=cambiarcodigo($viajeFeliz);
        break;
        case 2:
            echo "El destino anterior es: ".$viajeFeliz->getDestino()."\n";
            $nuevoDestino=destino($viajeFeliz);
        break;
        case 3:
            echo "La cantidad maxima anterior de pasajeros es: ".$viajeFeliz->getCantPasajeros()."\n";
            $nuevoCantPasajeros=cantPasajeros($viajeFeliz);
        break;
        case 4:
            $pasajero=listaPasajeros();
            $viajeFeliz->agregarPasajero($pasajero);
            echo "Pasajero agregado \n";
            echo $viajeFeliz->getPasajerosViaje();
        break;
        case 5:
            echo"ingrese el DNI del pasajero que quiere eliminar: ";
            $pasajero=trim(fgets(STDIN));
            $viajeFeliz->quitarPasajero($pasajero);
            echo"los pasajeros que quedaron en la lista son: \n";
            print_r($viajeFeliz->getPasajerosViaje());

        break;
        case 6:
            echo "Ingrese el DNI del pasajero que quiere modificar: \n";
            $pasajero = trim(fgets(STDIN));
            echo "Ingrese los nuevos datos: \n";
            $pasajero2 = listaPasajeros();
            $viajeFeliz->modificarDatosPasajero($pasajero, $pasajero2);
                echo "Se han modificado los datos.\n";
            
            break;
        break;
        case 7:
            echo $viajeFeliz."\n";
        break;
        


        
    }

}while($opcion!=8);

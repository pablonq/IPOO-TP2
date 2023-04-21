<?php
include_once "Viajes.php";
include_once "PERSONA.php";
include_once "responsablev.php";

$personasViaje=[
    new persona("cata","navarro",2999876543,99999999),
    new persona("luca","navarro",2991234567,88888888),
    new persona("romi","bascu",2991111111,77777777),
    new persona("valen","bascu",2992222222,66666666),
    new persona("vladi","bascu",2993333333,55555555),
    new persona("cin","rojas",2994444444,44444444),
    new persona("pilar","quezada",2993333333,33333333),
    new persona("pablo","navarro",2992222222,22222222)
];
$responsable = new ResponsableV("Pablo", "Navarro", 1234, 00001);
$viajes = new viajes(1,"Nqn",50,$personasViaje,$responsable);

function seleccionarOpcion(){

        echo "--------------------------------------------------------------\n";
        echo "\n ( 1 ) Cambiar codigo de viaje"; 
        echo "\n ( 2 ) Cambiar destino del viaje"; 
        echo "\n ( 3 ) Cambiar cantidad de pasajeros";
        echo "\n ( 4 ) Quitar pasajero";
        echo "\n ( 5 ) Modificar pasajero";
        echo "\n ( 6 ) Ver viaje";
        echo "\n ( 7 ) Salir"; 
        echo "\n --------------------------------------------------------------\n";
        $opcion= (trim(fgets(STDIN)));
        return $opcion;
}





do{
    $opcion=seleccionarOpcion();
    switch($opcion){
        case 1:
            echo "Elcodigo anterior es: ".$viajes->getCodigo();        
            echo "Ingrese el nuevo codigo del viaje: ";
            $codigo=trim((fgets(STDIN)));
            $viajes->cambiarcodigo($codigo);
        break;
        case 2:
            echo "El destino anterior es: ".$viajes->getDestino()."\n";
            echo"Ingrese el nuevo destino: ";
            $nuevoDestino=trim(fgets(STDIN));
            $viajes->cambiarDestino($nuevoDestino);
        break;
        case 3:
            echo "La cantidad maxima anterior de pasajeros es: ".$viajeFeliz->getCantPasajeros()."\n";
            echo"Ingrese la nueva cantidad: ";
            $nuevoCantPasajeros=trim(fgets(STDIN));
            $viajes->cantPasajeros($nuevoCantPasajeros);
        break;
        
        case 4:
            echo"ingrese el DNI del pasajero que quiere eliminar: ";
            $pasajero=trim(fgets(STDIN));
            echo"los pasajeros que quedaron en la lista son: \n";
            $viajes->quitarPasajero($pasajero);
            
            

        break;
        case 5:
            echo "Ingrese el DNI del pasajero que quiere modificar: \n";
            $pasajero = trim(fgets(STDIN));
            echo "Ingrese los nuevos datos: \n";
            echo "Ingrese el nombre: \n";
            $nombre=trim(fgets(STDIN));
            
            echo "Ingrese el apellido: \n";
            $apellido=trim(fgets(STDIN));
            echo "Ingrese el tel: \n";
            $tel=trim(fgets(STDIN));
            echo "Ingrese el dni: \n";
            $dni=trim(fgets(STDIN));
            $pasajero2=[$nombre,$apellido,$tel,$dni];
            $viajes->modificarDatosPasajero($pasajero,$pasajero2);
            
            break;
        break;
        case 6:
            echo $viajes."\n";
        break;
        


        
    }

}while($opcion!=7);

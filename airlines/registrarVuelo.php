<?php
    
    $avion = $_POST['avion'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $horaSalida = $_POST['horaSalida'];
    $horaLlegada = $_POST['horaLlegada'];
    
    ini_set("soap.wsdl_cache_enabled", "0");
    
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    
    $parametros = array("avion" => $avion, "destino" => $destino, "fecha" => $fecha, "horaSalida" => $horaSalida, "horaLlegada" => $horaLlegada);
    $response = $client->__soapCall('RegistrarVuelo', array($parametros));

    echo "Datos guardados";    
    header("location:Vuelos.php");
    
    
?>
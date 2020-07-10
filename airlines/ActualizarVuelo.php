<?php

    $idVuelo = $_GET['vuelo'];
    $avion = $_POST['avion'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $horaSalida = $_POST['horaSalida'];
    $horaLlegada = $_POST['horaLlegada'];

    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idVuelo" => $idVuelo,"avion" => $avion, "destino" => $destino, "fecha" => $fecha
            , "horaSalida" => $horaSalida, "horaLlegada" => $horaLlegada);
    $response = $client->__soapCall('ActualizarVuelo', array($parametros));
    print "<h1>".$response->{'respuesta'}."</h1>";

    header("location:Vuelos.php");
    
?>
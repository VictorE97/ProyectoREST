<?php

    $idPasajero = $_GET['pasajero'];
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idPasajero" => $idPasajero);
    $response = $client->__soapCall('EliminarPasajero', array($parametros));
    
    header("location:Pasajeros.php");
    //print "<h1>".$response->{'respuesta'}."</h1>";
    
?>
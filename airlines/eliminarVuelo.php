<?php

    $idVuelo = $_GET['vuelo'];
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idVuelo" => $idVuelo);
    $response = $client->__soapCall('EliminarVuelo', array($parametros));
    
    header("location:Vuelos.php");
    //print "<h1>".$response->{'respuesta'}."</h1>";
    
?>
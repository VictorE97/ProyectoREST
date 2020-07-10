<?php

    $idAvion = $_GET['avion'];
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idAvion" => $idAvion);
    $response = $client->__soapCall('EliminarAvion', array($parametros));
    
    header("location:Aviones.php");
    //print "<h1>".$response->{'respuesta'}."</h1>";
    
?>
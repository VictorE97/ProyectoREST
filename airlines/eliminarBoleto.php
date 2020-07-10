<?php
    
    $idBoleto = $_GET['boleto'];
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idBoleto" => $idBoleto);
    $response = $client->__soapCall('EliminarBoleto', array($parametros));
    
    header("location:Boletos.php");
    //print "<h1>".$response->{'respuesta'}."</h1>";
    
?>
<?php

    $idBoleto = $_GET['boleto'];
    $fecha = $_POST['fecha'];
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $asiento = $_POST['asiento'];
    $pago = $_POST['pago'];

    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idBoleto" => $idBoleto,"fecha" => $fecha, "origen" => $origen, "destino" => $destino
            , "asiento" => $asiento, "pago" => $pago);
    $response = $client->__soapCall('ActualizarBoleto', array($parametros));
    print "<h1>".$response->{'respuesta'}."</h1>";

    header("location:Boletos.php");
    
?>
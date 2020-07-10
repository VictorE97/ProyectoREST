<?php

    $idAvion = $_GET['avion'];
    $modelo = $_POST['modelo'];
    $numPasajeros = $_POST['numPasajeros'];
    $piloto = $_POST['piloto'];
    $aeromosas = $_POST['aeromosas'];
    $destino = $_POST['destino'];

    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idAvion" => $idAvion,"modelo" => $modelo, "numPasajeros" => $numPasajeros, "piloto" => $piloto
            , "aeromosas" => $aeromosas, "destino" => $destino);
    $response = $client->__soapCall('ActualizarAvion', array($parametros));
    print "<h1>".$response->{'respuesta'}."</h1>";

    header("location:Aviones.php");
    
?>
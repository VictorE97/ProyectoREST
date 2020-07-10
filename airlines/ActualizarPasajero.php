<?php

    $idPasajero = $_GET['pasajero'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idPasajero" => $idPasajero,"nombre" => $nombre, "apellido" => $apellido, "direccion" => $direccion
            , "telefono" => $telefono, "correo" => $correo);
    $response = $client->__soapCall('ActualizarPasajero', array($parametros));
    print "<h1>".$response->{'respuesta'}."</h1>";

    header("location:Pasajeros.php");
    
?>
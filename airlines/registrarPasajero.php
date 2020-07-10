<?php
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    
    ini_set("soap.wsdl_cache_enabled", "0");
    
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    
    $parametros = array("nombre" => $nombre, "apellido" => $apellido, "direccion" => $direccion, "telefono" => $telefono, "correo" => $correo);
    $response = $client->__soapCall('RegistrarPasajero', array($parametros));

    echo "Datos guardados";    
    header("location:Pasajeros.php");
    
    
?>
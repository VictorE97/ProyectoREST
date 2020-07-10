<?php
    ini_set("soap.wsdl_cache_enabled", "0");
    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
    $parametros = array("idBoleto" => $_GET['boleto']);
    $response = $client->__soapCall('ConsultarBoleto', array($parametros));
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/styleform.css">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Cabin_400.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
</style>

</head>
<body id="page1">
<div class="main">
  <!--header -->
  <header>
    <div class="wrapper">
      <h1><a href="index.html" id="logo">AirLines</a></h1>
      <span id="slogan">Vuelos Seguros</span>
      <nav id="top_nav">
        <ul>
          <li><a href="index.html" class="nav1">Incio</a></li>
        </ul>
      </nav>
    </div>
    <nav>
      <ul id="menu">
        <li id="menu_active"><a href="index.html"><span><span>Principal</span></span></a></li>
        <li><a href="Pasajeros.php"><span><span>Pasajeros</span></span></a></li>
        <li><a href="Aviones.php"><span><span>Aviones</span></span></a></li>
        <li><a href="Vuelos.php"><span><span>Vuelos</span></span></a></li>
        <li><a href="Boletos.php"><span><span>Comprar Boleto</span></span></a></li>
        <li class="end"><a href="contacts.html"><span><span>Contacts</span></span></a></li>
      </ul>
    </nav>
  </header>
  
  <section id="content">
            <form class="form-register" action="ActualizarBoleto.php?boleto=<?php echo $_GET['boleto'] ?>" method="POST">
           <h1>Actualizar Boleto</h1>
            <input class="controls" type="text" name="fecha" id="fecha" placeholder="Ingrese fecha" value="<?php echo $response->{'fecha'}?>" required/>
            <input class="controls" type="text" name="origen" id="origen" placeholder="Ingrese origen" value="<?php echo $response->{'origen'}?>" required/>
            <input class="controls" type="text" name="destino" id="destino" placeholder="Ingrese destino" value="<?php echo $response->{'destino'}?>" required/>
            <input class="controls" type="text" name="asiento" id="asiento" placeholder="Ingrese # de asiento" value="<?php echo $response->{'asiento'}?>" required/>
            <input class="controls" type="text" name="pago" id="pago" placeholder="Ingrese forma de pago" value="<?php echo $response->{'pago'}?>" required/> <br>
            <button type="submit" class="w3-button w3-indigo">Actualizar Boleto</button>
            <button onclick="location.href='Boletos.php'" class="w3-button w3-indigo">Cancelar</button>
        </form>
  </section>
  
  <footer>
    <div class="wrapper">
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon5.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon6.jpg" alt=""></a></li>
      </ul>
      <div>
          <h4>Victor Emmanuel Baizabal Rivera</h4>
      </div>
    </div>
  </footer>
  
</div>
</body>
</html>
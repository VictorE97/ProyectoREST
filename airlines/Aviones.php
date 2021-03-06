<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Cabin_400.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
        <li><a href="index.html"><span><span>Principal</span></span></a></li>
        <li><a href="Pasajeros.php"><span><span>Pasajeros</span></span></a></li>
        <li id="menu_active"><a href="Aviones.php"><span><span>Aviones</span></span></a></li>
        <li><a href="Vuelos.php"><span><span>Vuelos</span></span></a></li>
        <li><a href="Boletos.php"><span><span>Comprar Boleto</span></span></a></li>
        <li class="end"><a href="contacts.html"><span><span>Contacts</span></span></a></li>
      </ul>
    </nav>
  </header>
  <!-- / header -->
  <!--content -->
  <section id="content">
    <div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-striped table-bordered table-hover">
				    <h2>Tabla de Aviones</h2>
					<thead>
						<tr>
							<th>Modelo</th>
                            <th>Num. Pasajeros</th>
                            <th>Piloto</th>
                            <th>Aeromosas</th>
                            <th>Destino</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
						</tr>
					</thead>
					<?php
                                    ini_set("soap.wsdl_cache_enabled", "0");
                                    $client = new SoapClient("http://54.197.23.7:8080/aerolinea.wsdl");
                                    $response = $client->__soapCall('ListarAviones', array());
                                    foreach ($response->{'avion'} as $a) {
                                        print "<tr>";
                                        print "<td>".$a->{'modelo'}."</td>";
                                        print "<td>".$a->{'numPasajeros'}."</td>";
                                        print "<td>".$a->{'piloto'}."</td>";
                                        print "<td>".$a->{'aeromosas'}."</td>";
                                        print "<td>".$a->{'destino'}."</td>";
                                        print "<td>
                                        <a href='editarAvion.php?avion=".$a->{'idAvion'}."'><button type='button' class='btn btn-success'>Editar Avion</button></a></td>";
                                        print "<td>
                                        <a href='eliminarAvion.php?avion=".$a->idAvion."'><button type='button' class='btn btn-success'>Eliminar Avion</button></a></td>";
                        
                                        print "</tr>";
                                    }
                                    
                                ?>

				</table>
				<button onclick="location.href='registrarAvion.html'" class="w3-button w3-indigo">Registrar Avion</button>
			</div>
		</div>
      </div>
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
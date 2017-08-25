<html>
<head>
<title>PSW + COOKIE EN PHP</title>
</head>
<body>
<header>
<nav>
<a href="inicio.html">Inicio</a>
<a href="contacto.html">Contacto</a> 
<a href="nosotros.html">Nosotros</a>
<a href="servicios.html">Servicios</a>  
</nav>
</header>
<div id="main">
<?php
$nombre=$_POST["nombre"];


echo "Edicion en proceso.....</br>";

include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj ->insertDemo($nombre);


?> 
<div><a href="index.php">Volver al inicio</a></div>
</body>
</html>

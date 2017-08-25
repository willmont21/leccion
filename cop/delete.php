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
$id=$_GET["id"];

echo "Eliminado</br>";

include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj ->deleteDemo($id);
?> 
<div><a href="index.php">Volver al inicio</a></div>
</body>
</html>

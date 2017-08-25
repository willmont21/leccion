<html>
<head>
<title>PSW + COOKIE EN PHP</title>
</head>
<body>

<div id="main">
<?php
$img=$_POST["img"];
$nombre=$_POST["nombre"];
$iddemo=$_POST["id_demo"];
$tipo=$_POST["tipo"];
$fecha=$_POST["fecha"];

echo "Edicion en proceso.....</br>";

include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj ->updateDemo($iddemo,$nombre,$tipo,$img);

echo "id : ".$iddemo." actualizado a: ".$nombre."</br>";
?> 
<div><a href="index.php">Volver al inicio</a></div>
</body>
</html>

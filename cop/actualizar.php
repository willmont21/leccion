<html>
<head>
<title>PSW + COOKIE EN PHP</title>
</head>
<body>

<div id="main">
<?php
$nombre=$_POST["nombre"];
$iddemo=$_POST["id_demo"];
$idtipo=$_POST["tipo"];
$idfecha=$_POST["fecha"];

echo "Edicion en proceso.....</br>";

include_once("DemoCollector.php");
$DemoCollectorObj = new DemoCollector();
$DemoCollectorObj ->updateDemo($iddemo,$nombre,$tipo,$fecha);

echo "id : ".$iddemo." actualizado a: ".$nombre."</br>";
?> 
<div><a href="index.php">Volver al inicio</a></div>
</body>
</html>

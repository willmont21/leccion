<?php
	session_start();
		
?>
<!DOCTYPE html>
<html>
<head>
<title>PSW + COOKIE EN PHP</title>
</head>
<body>



<?php


echo "<h1>Usuarios</h1>";
echo "<p> hola user:(". $_SESSION['misesion'].") [<a href='salir.php'>Salir</a>]";

include_once("DemoCollector.php");

$id =1;

$DemoCollectorObj = new DemoCollector();

echo "<a href = 'insert.php' >nuevo</a>";
foreach ($DemoCollectorObj->showDemos() as $c){
  echo "<div>";
  echo "<a href = 'delete.php?id=".$c->getIdDemo()."'> X</a> &nbsp";
  echo "<a href = 'perfil.php?id=".$c->getIdDemo()."' >Perfil </a>&nbsp";
  
  echo $c->getNombre(). "&nbsp" . $c->getTipo(). "&nbsp" . $c->getFecha();

}



?>


</body>
</html>

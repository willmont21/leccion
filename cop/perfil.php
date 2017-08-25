<html>
<head>
<title>PSW + COOKIE EN PHP</title>
</head>
<body>


<?php
$id=$_GET["id"];
echo "valor de id es ".$id;
include_once("DemoCollector.php");
include_once("Demo.php");
$DemoCollectorObj = new DemoCollector();
$ObjDemo = $DemoCollectorObj->showDemo($id);


?>
<h2>Editar Objeto Demo </h2>
<form action ="editar.php" method="post">
<img src="<?php echo $ObjDemo->getImg();?>" width: 50px height: 50px>
<p>
Id:<input type="text" name="id_demo" value="<?php echo $ObjDemo->getIdDemo();?>" readonly/>

</p>
<p>
Tipo:<input type="text" name="tipo" value="<?php echo $ObjDemo->getTipo();?>" readonly/>

</p>
<p>
Nombre:<input type="text" name="nombre" value="<?php echo $ObjDemo->getNombre();?>" readonly/>
</p>
<p>
Fecha:<input type="text" name="fecha" value="<?php echo $ObjDemo->getFecha();?>" readonly/>
</p>
<a href='index.php'>Cancelar</a>
<?php echo "<a href = 'formularioDemoEditar.php?id=".$ObjDemo->getIdDemo()."' >editar </a>";
 echo "<a href = 'delete.php?id=".$ObjDemo->getIdDemo()."'> X</a> &nbsp";?>
</form>
</body>
</html>

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


<h2>Nuevo</h2>
<form action ="nuevo.php" method="post">
<p>
Img:<input type="text" name="img" value=>
</p>
<p>
Nombre:<input type="text" name="nombre" value= >
</p>
<p>
Tipo:<input type="text" name="tipo" value= >
</p>
<p>
Fecha:<input type="text" name="fecha" value=>
</p>

<a href='index.php'>Cancelar</a>
<input type="submit" value="Guardar">
</form>
</body>
</html>

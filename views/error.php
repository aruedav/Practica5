<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="./public/style.css">

</head>
<body>
<header>
	<h1>Esto es una página de error :(.</h1>

<nav>
<center>
	<ul>
		<li><a href="home">Home</a></li>
		<li><a href="contact">Contact</a></li>
		<li><a href="about">About</a></li>
	</ul>
</center>
</nav>
<center><h3 class="error"><?php echo "La pagina \"".$pagina."\" a la que intentabas acceder no existe."; ?></h3></center>
</header>
<h3>&copy;<?php echo $Nom; 
			 echo " ".$Cognom1." ".$Cognom2; ?></h3>	
</body>
</html>
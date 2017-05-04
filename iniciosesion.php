<!DOCTYPE html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald:200,300" rel="stylesheet">
    	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    	<link rel="stylesheet" href="css/mobile-kronos.css">
    	<link rel="stylesheet" href="css/mobile-tablet.css">
    	<link rel="stylesheet" href="css/mobile-desktop.css">
		<title>Inicia Sesion</title>
</head>

<body>
	<div class="container"> 

	<header class="main-header">
	<?php include 'header.php';?>
	</header>


	<div class="formulario"> 

	<div class="titulo">
	Ya sos usuario? Inicia Sesion!<br><br>
	</div>

<form method="POST">
	<span class="titulos">Usuario:</span>   
		<input type="text" name="usuario" value=""><br>
	<span class="titulos">Contraseña:</span>   
		<input type="password" name="contraseña" value=""><br>
	<br>
		<input type="radio" name="recordarcontrasenia" value="recordar">Recordar Contraseña
	<br><br>
		<input class="botones" type="reset" value="Resetear">
		<input class="botones" type="submit" value="Enviar">
</form>

</div>

<footer class="main-footer">
 <?php include 'footer.php';?>
 </footer>
	



</body>
</html>
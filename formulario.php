<!DOCTYPE html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald:200,300" rel="stylesheet">
    	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
    	<link rel="stylesheet" href="css/mobile-kronos.css">
    	<link rel="stylesheet" href="css/mobile-tablet.css">
    	<link rel="stylesheet" href="css/mobile-desktop.css">
    	
		<title>Register</title>
</head>

<body>
	<div class="container"> 

	<header class="main-header">
	<?php include 'header.php';?>
	</header>


	<div class="formulario"> 

	<div class="titulo">
	Regístrate en nuestra página para acceder a los mejores beneficios!<br><br>
	</div>

		<form method="POST">
			<span class="titulos">Nombre:</span>
			<span class="escribir">
				<input type="text" name="nombre" value=""><br></span>
			<span class="titulos">Apellido:</span> 
			<span class="escribir">
				<input type="text" name="apellido" value=""><br></span>
			<span class="titulos">Usuario:</span> 
			<span class="escribir">
				<input type="text" name="usuario" value=""><br></span>
			<span class="titulos">Contraseña:</span>    
			<span class="escribir">
				<input type="password" name="contraseña" value=""><br></span>
			<span class="titulos">Repita contraseña:</span>   
			<span class="escribir">
				<input type="password" name="repitacontraseña" value=""><br></span>
			<span class="titulos">Sexo</span>     
			<span class="escribir">
				<input type="radio" name="gender" value="male">Masculino
			  	<input type="radio" name="gender" value="female">Femenino
			  	<input type="radio" name="gender" value="other">Otro
			  	</span>
			<br>
			<span class="titulos">Fecha de Nacimiento:</span>   
			<select name="dia">
				<?php for ($i=1;$i<32;$i++) {
					echo "<option value='" .$i. "'>" . $i. "</option>";
				}
				?>
			</select>
			<select name ="mes">
				<option value ="01">Enero</option>
				<option value ="02">Febrero</option>
				<option value ="03">Marzo</option>
				<option value ="04">Abril</option>
				<option value ="05">Mayo</option>
				<option value ="05">Junio</option>
				<option value ="05">Julio</option>
				<option value ="05">Agosto</option>
				<option value ="05">Septiembre</option>
				<option value ="05">Octubre</option>
				<option value ="05">Noviembre</option>
				<option value ="05">Diciembre</option>
			</select>
			<select name ="anio">
				<?php for ($i=2017;$i>1918;$i--) {
						echo "<option value='" .$i. "'>" . $i. "</option>";
					}
					?>
			</select>
			<br><br>
			<input type="radio" name="terminos" value="heleido">He leido los <a href="#">Términos y Condiciones</a>	
			<br><br>
			<input class="botones" type="submit" value="Enviar">
			<input class="botones" type="reset" value="Resetear">
		</form>
	</div>		

<footer class="main-footer">
<?php include 'footer.php';?>

</footer>

</div>



</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/styleForm.css">
	<title>Trabajo y Resultados</title>
</head>
<body>
<div class="cform">
<div class="cSubT">
<h2>Plan de Desarrollo Municipal de Nicolás Romero 2016 - 2018</h2>
</div>
<br>
	<form action="procesar.php" method="post">
		<input type="text" name="txtNombre" placeholder="Nombre..."/>
		<br>
		<input type="text" name="txtDirecc" placeholder="Dirección..."/>
		<br>
		<input type="number" name="txtTelefono" min="8" max="10" placeholder="Teléfono..."/>
		<br>
		<input type="email" name="txtCorreo" placeholder="Correo..."/>
		<br>
		<input type="text" name="txtNPro" placeholder="Tema..."/>
		<br>
		<textarea name="txtTexto" id="" cols="30" rows="10" placeholder="Propuesta..."></textarea>
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>
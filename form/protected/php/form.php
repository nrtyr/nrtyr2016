<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../css/styleForm.css">
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<title>Trabajo y Resultados</title>
</head>
<body>
<div class="cform">
<div class="cSubT">
<h2>Plan de Desarrollo Municipal de Nicolás Romero 2016 - 2018</h2>
</div>
<br>
	<form action="procesar.php" method="post">
		<input type="text" name="txtNombre" title="Se necesita Nombre Completo!" min="10" max="42" placeholder="Nombre..." required/>
		<br>
		<input type="text" name="txtDirecc" title="Se necesita Dirección!" min="10" max="120" placeholder="Dirección..." required/>
		<br>
		<input type="number" name="txtTelefono" title="Se necesita Teléfono!" min="10000000" max="999999999" placeholder="Teléfono..." required/>
		<br>
		<input type="email" name="txtCorreo" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Correo..." required/>
		<br>
		<input type="text" name="txtNPro" title="Se necesita Tema!" min="3" max="42" placeholder="Tema..." required/>
		<br>
		<textarea name="txtTexto" id="" title="Se necesita Propuesta!" cols="30" rows="10" min="10" max="254" placeholder="Propuesta..." required></textarea>
		<br>
		<input type="submit" value="Enviar"/>
	</form>
</body>
</html>
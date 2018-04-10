<!DOCTYPE html>
<html>
<head>
	<title>Ingreso de Usuario</title>
</head>
<body>

Ingreso de Usuario

<form action="conex.php" method="POST">
<table border="1" cellpadding="5" cellspacing="0">
	<tr> <!-- Filas -->
		<th>Usuario</th>
		<td><input type="text" name="usuario"></td>
	</tr>
	<tr> <!-- Filas -->
		<th>Contraseña</th>
		<td><input type="password" name="contrasena"></td>
	</tr>
	<tr align="center">
		<td colspan="2">
			<button type="submit">Ingresar</button>
			<button type="reset">Limpiar</button>
		</td>
	</tr>
</table>
</form>

</body>
</html>
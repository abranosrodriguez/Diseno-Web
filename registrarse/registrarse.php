<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h1>Regístrate</h1>
	<form action="registro.php" method="post">
		<table border="0">
			<tr><td>Nombre</td></tr>
			<tr><td><input type="text" name="nombre" placeholder="" required=""></td></tr>

			<tr><td>Apellidos</td></tr>
			<tr><td><input type="password" name="apellidos" placeholder="" required=""></td></tr>

			<tr><td>Correo</td></tr>
			<tr><td><input type="text" name="correo" placeholder="" required=""></td></tr>

			<tr><td>Contraseña</td></tr>
			<tr><td><input type="text" name="contrasena" placeholder="" required=""></td></tr>

			<tr><td>Repetir Contraseña</td></tr>
			<tr><td><input type="text" name="recontrasena" placeholder="" required=""></td></tr>

			<tr><td>Telefono</td></tr>
			<tr><td><input type="number" name="telefono" placeholder="" required=""></td></tr>

			<tr><td><input type="submit" name="registrarse" value="Registrarse"></td></tr>
			
		</table>
			<p>¿Ya tienes cuenta? <a href="../identificate/identificate.php">Identificate</a></p>
	</form>
</body>
</html>